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
    public function index(Request $request, string $category)
{
    $this->ensureValidCategory($category);

    $q    = trim((string) $request->query('q', ''));
    $year = $request->query('year');

    $base = Procurement::query()->category($category)->published();

    $years = (clone $base)
    ->whereNotNull('published_at')
    ->pluck('published_at')
    ->map(fn ($d) => $d->format('Y'))
    ->unique()
    ->sortDesc()
    ->values();

    $items = $base
        ->when($q !== '', fn ($query) => $query->where(function ($w) use ($q) {
            $w->where('title', 'like', "%{$q}%")
              ->orWhere('excerpt', 'like', "%{$q}%");
        }))
        ->when($year, fn ($query) => $query->whereYear('published_at', $year))
        ->orderByDesc('published_at')
        ->orderByDesc('id')
        ->paginate(5)
        ->withQueryString();

    return view('pengadaan.index', [
        'category'      => $category,
        'categoryLabel' => Procurement::categoryLabel($category),
        'categories'    => Procurement::categories(),
        'items'         => $items,
        'q'             => $q,
        'year'          => $year,
        'years'         => $years,
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
