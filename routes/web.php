<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProcurementController;

/*
|--------------------------------------------------------------------------
| Web Routes — PT PLN Mandau Cipta Tenaga Nusantara (PLN MCTN)
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/fasilitas', [PageController::class, 'facilities'])->name('facilities');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/kontak', [PageController::class, 'sendContact'])->name('contact.send');

/*
|--------------------------------------------------------------------------
| Pengadaan (Procurement)
|--------------------------------------------------------------------------
| Menu "Pengadaan" berisi beberapa kategori pengumuman: berita, tender,
| DPT, pemenang & jadwal sanggah, serta lelang. Semua kategori memakai
| satu controller yang sama dengan parameter {category}.
*/
Route::prefix('pengadaan')->name('pengadaan.')->group(function () {
    Route::get('/{category}', [ProcurementController::class, 'index'])->name('index');
    Route::get('/{category}/{slug}/unduh', [ProcurementController::class, 'download'])->name('download');
    Route::get('/{category}/{slug}', [ProcurementController::class, 'show'])->name('show');
});

/*
|--------------------------------------------------------------------------
| Admin — Pengelolaan Pengumuman Pengadaan
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProcurementAdminController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('pengadaan', ProcurementAdminController::class)
            ->parameters(['pengadaan' => 'pengadaan'])
            ->except(['show']);
    });
});

Route::get('/artikel/andalan-energi', function () {
    return view('artikel.andalan-energi');
})->name('artikel.andalan-energi');

Route::get('/artikel/penopang-produksi', function () {
    return view('artikel.penopang-produksi');
})->name('artikel.penopang-produksi');

Route::get('/artikel/listrik-uap', function () {
    return view('artikel.listrik-uap');
})->name('artikel.listrik-uap');