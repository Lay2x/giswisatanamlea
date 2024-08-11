<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RattingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TipeWisataController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\WisataLandingController;
use App\Http\Controllers\WisataLokasiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('home', HomeController::class);
Route::get('tentang_kami', [TentangKamiController::class, 'index']);
Route::resource('tentang-kami', TentangKamiController::class);
Route::get('kontak_kami', [ContactController::class, 'index']);
Route::resource('kontak-kami', ContactController::class);
Route::get('/wisata/detail-wisata/{slug}', [HomeController::class, 'detailwisata']);
Route::get('wisata_kami', [WisataLandingController::class, 'index']);
Route::resource('wisata-kami', WisataLandingController::class);
Route::get('lokasi_wisata', [WisataLokasiController::class, 'index']);
Route::resource('lokasi-wisata', WisataLokasiController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('dashboard');
    Route::resource('setting', SettingController::class);
    Route::post('image-upload', [SettingController::class, 'storeImage'])->name('image.upload');
    Route::resource('dashboard', DashboardController::class);
    Route::resource('wisata', WisataController::class);
    Route::resource('ratting', RattingController::class);
    // Route::post('/ratting/undoratting', [RattingController::class, 'undoratting'])->name('ratting.undoratting');
    Route::resource('tipewisata', TipeWisataController::class);
    Route::resource('visimisi', VisiMisiController::class);
});
