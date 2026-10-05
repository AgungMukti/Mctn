<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'slug',
        'excerpt',
        'content',
        'attachment_path',
        'attachment_name',
        'published_at',
        'is_published',
    ];

    protected $casts = [
        'published_at' => 'date',
        'is_published'  => 'boolean',
    ];

    /**
     * Kategori pengadaan yang tersedia beserta labelnya.
     * Urutan array ini juga dipakai untuk menyusun menu dropdown "Pengadaan".
     */
    public static function categories(): array
    {
        return [
            'berita'  => 'News',
            'tender'  => 'Pengumuman Tender',
            'dpt'     => 'Pengumuman DPT',
            'pemenang' => 'Pengumuman Pemenang & Jadwal Sanggah',
            'lelang'  => 'Pengumuman Lelang',
        ];
    }

    public static function categoryLabel(string $category): string
    {
        return self::categories()[$category] ?? ucfirst($category);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where(function ($q) {
                $q->whereNull('published_at')->orWhere('published_at', '<=', now());
            });
    }

    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }
}
