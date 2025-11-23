{{-- 1. Nyatakan bahwa halaman ini mewarisi dari layout app.blade.php --}}
@extends('layouts.app')

{{-- 2. Isi slot 'title' yang ada di layout --}}
@section('title', 'Beranda')

{{-- 3. Isi slot 'content' dengan konten halaman ini --}}
@section('content')
    <h1>Selamat Datang di Halaman Beranda!</h1>
    <p>Ini adalah konten utama yang mengisi slot 'content' pada layout.</p>
@endsection