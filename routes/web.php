<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route untuk URL /about
Route::get('/about', function () {
    return view('about.index');
});

Route::get('/profile', function () {
    // 1. Siapkan data dalam bentuk array asosiatif
    $data = [
        'nama' => 'Budi Santoso',
        'pekerjaan' => 'Web Developer',
        'kota' => 'Jakarta',
        'judul' => 'Selamat Datang di Halaman Profile'
    ];

    // 2. Kirim data ke view 'selamat-datang'
    // Kunci array ('nama', 'pekerjaan') akan menjadi nama variabel di view
    return view('profile.index', $data);
});






