<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Procurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProcurementAdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Procurement::query()->orderByDesc('created_at');

        if ($request->filled('category')) {
            $query->category($request->string('category'));
        }

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->string('q') . '%');
        }

        $items = $query->paginate(15)->withQueryString();

        return view('admin.pengadaan.index', [
            'items'      => $items,
            'categories' => Procurement::categories(),
        ]);
    }

    public function create()
    {
        return view('admin.pengadaan.create', [
            'categories' => Procurement::categories(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        $data['slug'] = $this->uniqueSlug($data['title']);

        if ($request->hasFile('attachment')) {
            [$data['attachment_path'], $data['attachment_name']] = $this->storeAttachment($request);
        }

        Procurement::create($data);

        return redirect()
            ->route('admin.pengadaan.index')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function edit(Procurement $pengadaan)
    {
        return view('admin.pengadaan.edit', [
            'item'       => $pengadaan,
            'categories' => Procurement::categories(),
        ]);
    }

    public function update(Request $request, Procurement $pengadaan)
    {
        $data = $this->validated($request, $pengadaan->id);

        if ($pengadaan->title !== $data['title']) {
            $data['slug'] = $this->uniqueSlug($data['title'], $pengadaan->id);
        }

        if ($request->hasFile('attachment')) {
            if ($pengadaan->attachment_path) {
                Storage::disk('public')->delete($pengadaan->attachment_path);
            }
            [$data['attachment_path'], $data['attachment_name']] = $this->storeAttachment($request);
        }

        $pengadaan->update($data);

        return redirect()
            ->route('admin.pengadaan.index')
            ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy(Procurement $pengadaan)
    {
        if ($pengadaan->attachment_path) {
            Storage::disk('public')->delete($pengadaan->attachment_path);
        }

        $pengadaan->delete();

        return back()->with('success', 'Pengumuman berhasil dihapus.');
    }

    protected function validated(Request $request, ?int $ignoreId = null): array
    {
        $validated = $request->validate([
            'category'     => ['required', 'in:' . implode(',', array_keys(Procurement::categories()))],
            'title'        => ['required', 'string', 'max:255'],
            'excerpt'      => ['nullable', 'string', 'max:500'],
            'content'      => ['nullable', 'string'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable', 'boolean'],
            'attachment'   => ['nullable', 'file', 'max:10240', 'mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png'],
        ]);

        $validated['is_published'] = $request->boolean('is_published');

        unset($validated['attachment']);

        return $validated;
    }

    protected function storeAttachment(Request $request): array
    {
        $file = $request->file('attachment');
        $path = $file->store('pengadaan', 'public');

        return [$path, $file->getClientOriginalName()];
    }

    protected function uniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;

        while (
            Procurement::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . (++$i);
        }

        return $slug;
    }
}
