<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Pengaduan Sekolah</a>

        <div>
            <a href="/aspirasi" class="btn btn-light btn-sm">Aspirasi</a>
            <a href="/siswa" class="btn btn-light btn-sm">Siswa</a>
            <a href="/kategori" class="btn btn-light btn-sm">Kategori</a>
            <a href="/status" class="btn btn-light btn-sm">Status</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>