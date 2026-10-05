<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Procurement;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = collect(Procurement::categories())->map(function ($label, $slug) {
            return [
                'slug'  => $slug,
                'label' => $label,
                'total' => Procurement::category($slug)->count(),
            ];
        })->values();

        $latest = Procurement::orderByDesc('created_at')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'latest'));
    }
}
