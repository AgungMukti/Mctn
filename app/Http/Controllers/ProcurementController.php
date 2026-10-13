<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;

class ProcurementController extends Controller
{
    /**
     * Menampilkan daftar pengumuman untuk satu kategori pengadaan.
     * Contoh kategori: berita, tender, dpt, pemenang, lelang.
     */
    public function index(Request $request, string $category)
{
    $this->ensureValidCategory($category);

    $q    = trim($request->string('q')->toString());
$year = $request->integer('year') ?: null;

$base = Procurement::query()->category($category)->published();

$years = (clone $base)
    ->whereNotNull('published_at')
    ->selectRaw('YEAR(published_at) as year')
    ->distinct()
    ->orderByDesc('year')
    ->pluck('year');

$like = '%' . addcslashes($q, '%_\\') . '%';

$items = $base
    ->when($q !== '', fn ($query) => $query->where(function ($w) use ($like) {
        $w->where('title', 'like', $like)
          ->orWhere('excerpt', 'like', $like);
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

        $disk = Storage::disk('public');
        abort_unless($disk->exists($item->attachment_path), 404);

    return $disk->download(
    $item->attachment_path,
    $item->attachment_name ?? basename($item->attachment_path)
);
    }

    protected function ensureValidCategory(string $category): void
    {
        abort_unless(array_key_exists($category, Procurement::categories()), 404);
    }
}
