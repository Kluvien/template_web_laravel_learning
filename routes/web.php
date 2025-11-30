<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplatePageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Page
Route::get('/', [TemplatePageController::class, 'home'])->name('home');

// About Us
Route::get('/tentang-kami', [TemplatePageController::class, 'aboutUs'])->name('about-us');

// Facilities
Route::get('/fasilitas', [TemplatePageController::class, 'facilities'])->name('facilities');

// PPDB (Student Registration)
Route::get('/ppdb', [TemplatePageController::class, 'ppdb'])->name('ppdb');

// News/Blog
Route::get('/berita', [TemplatePageController::class, 'news'])->name('news');
Route::get('/berita/{slug}', [TemplatePageController::class, 'newsDetail'])->name('news.detail');

// Contact
Route::get('/kontak', [TemplatePageController::class, 'contact'])->name('contact');
Route::post('/kontak', [TemplatePageController::class, 'submitContact'])->name('contact.submit');

// Gallery
Route::get('/galeri', [TemplatePageController::class, 'gallery'])->name('gallery');

// Management & Academic Pages
Route::get('/manajemen', [TemplatePageController::class, 'management'])->name('management');
Route::get('/kurikulum', [TemplatePageController::class, 'curriculum'])->name('curriculum');

// Additional Static Pages (can be expanded as needed)
Route::get('/kesiswaan', function () {
    return view('pages.kesiswaan');
})->name('kesiswaan');

Route::get('/ismuba', function () {
    return view('pages.ismuba');
})->name('ismuba');

Route::get('/humas', function () {
    return view('pages.humas');
})->name('humas');

Route::get('/sarpras', function () {
    return view('pages.sarpras');
})->name('sarpras');

Route::get('/human-resource', function () {
    return view('pages.human-resource');
})->name('human-resource');

Route::get('/rapor', function () {
    return view('pages.rapor');
})->name('rapor');

Route::get('/skl', function () {
    return view('pages.skl');
})->name('skl');

Route::get('/unduh', function () {
    return view('pages.unduh');
})->name('unduh');

Route::get('/pusat-bantuan', function () {
    return view('pages.pusat-bantuan');
})->name('pusat-bantuan');
