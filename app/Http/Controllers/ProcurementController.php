<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ProcurementController extends Controller
{
    /**
     * Menampilkan daftar pengumuman untuk satu kategori pengadaan.
     * Contoh kategori: berita, tender, dpt, pemenang, lelang.
     */
    public function index(string $category)
    {
        $this->ensureValidCategory($category);

        $items = Procurement::query()
            ->category($category)
            ->published()
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->paginate(10)
            ->withQueryString();

        return view('pengadaan.index', [
            'category'      => $category,
            'categoryLabel' => Procurement::categoryLabel($category),
            'categories'    => Procurement::categories(),
            'items'         => $items,
        ]);
    }

    /**
     * Menampilkan detail satu pengumuman.
     */
    public function show(string $category, string $slug)
    {
        $this->ensureValidCategory($category);

        $item = Procurement::query()
            ->category($category)
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('pengadaan.show', [
            'category'      => $category,
            'categoryLabel' => Procurement::categoryLabel($category),
            'item'          => $item,
        ]);
    }

    /**
     * Mengunduh lampiran pengumuman (jika ada).
     */
    public function download(string $category, string $slug): StreamedResponse
    {
        $this->ensureValidCategory($category);

        $item = Procurement::query()
            ->category($category)
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        abort_unless($item->attachment_path, 404);

        return \Storage::disk('public')->download(
            $item->attachment_path,
            $item->attachment_name ?? basename($item->attachment_path)
        );
    }

    protected function ensureValidCategory(string $category): void
    {
        abort_unless(array_key_exists($category, Procurement::categories()), 404);
    }
}
