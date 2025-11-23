<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $judul }}</h1>
        <p>Daftar shorcut Terbaru:</p>
        <ul class="list-group">
            @foreach ($daftarArtikel as $artikel)
                <li class="list-group-item">
                    <a href="{{ $artikel['link'] }}">{{ $artikel['judul'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>