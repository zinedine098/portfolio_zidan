<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        $judul = 'Halaman shorcut link';
        $daftarArtikel = [
            ['id' => 1, 'judul' => 'youtube', 'link' => 'https://youtube.com'],
            ['id' => 2, 'judul' => 'google', 'link' => 'https://google.com'],
            ['id' => 3, 'judul' => 'instagram', 'link' => 'https://instagram.com'],
            ['id' => 4, 'judul' => 'facebook', 'link' => 'https://facebook.com'],
            ['id' => 5, 'judul' => 'pinterest', 'link' => 'https://pinterest.com'],
        ];

        // Kirim data ke view 'beranda' menggunakan compact()
        return view('beranda', compact('judul', 'daftarArtikel'));
    }

    public function profile()
    {
        $data = [
        'nama' => 'Budi Santoso',
        'pekerjaan' => 'Web Developer',
        'kota' => 'Jakarta',
        'judul' => 'Selamat Datang di Halaman Profile'
    ];

    // 2. Kirim data ke view 'selamat-datang'
    // Kunci array ('nama', 'pekerjaan') akan menjadi nama variabel di view
    return view('profile.index', $data);
    }

    public function about()
    {
    return view('about.index');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
