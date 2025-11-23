<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title> <!-- Placeholder untuk judul -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo Saya</a>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content') <!-- Placeholder untuk konten utama -->
    </main>

    <footer class="bg-light text-center p-3 mt-5">
        <p>&copy; 2023 - Aplikasi Saya</p>
    </footer>
</body>
</html>