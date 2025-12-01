<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Template\SchoolController;

/*
|--------------------------------------------------------------------------
| Web Routes - Template School Website
|--------------------------------------------------------------------------
|
| These routes are for the school template. The CMS can override these
| routes or use them as-is depending on the implementation.
|
*/

// Home Page
Route::get('/', [SchoolController::class, 'home'])->name('home');

// About Us Page
Route::get('/tentang', [SchoolController::class, 'tentang'])->name('tentang');

// Programs Page
Route::get('/program', [SchoolController::class, 'program'])->name('program');

// News/Blog Pages
Route::get('/berita', [SchoolController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [SchoolController::class, 'beritaDetail'])->name('berita.detail');

// Gallery Page
Route::get('/galeri', [SchoolController::class, 'galeri'])->name('galeri');

// Contact Page
Route::get('/kontak', [SchoolController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [SchoolController::class, 'kontakSubmit'])->name('kontak.submit');

// PPDB (Student Admission) Page
Route::get('/ppdb', [SchoolController::class, 'ppdb'])->name('ppdb');
