
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tulisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white text-dark">

    <header class="bg-black">
        <nav class="container d-flex flex-wrap align-items-center py-3 gap-3">
            <a href="{{ url('/home') }}" class="text-white text-decoration-none fs-4 fw-bold me-auto">
                Tulisan
            </a>

            <a href="{{ url('/home') }}" class="text-white text-decoration-none border-bottom border-2 border-white pb-1">Home</a>
            <a href="{{ url('/artikel') }}" class="text-secondary text-decoration-none">Artikel</a>
            <a href="{{ url('/profil') }}" class="text-secondary text-decoration-none">Profil</a>
            <a href="{{ url('/login') }}" class="btn btn-light btn-sm px-3">Masuk</a>
        </nav>
    </header>

    <main class="container min-vh-100 d-flex align-items-center">
        <div class="py-5" style="max-width: 680px;">
            <h1 class="display-2 fw-semibold mb-4">
                Selamat datang di website saya
            </h1>

            <p class="fs-5 text-secondary mb-4">
                Kumpulan tulisan tentang teknologi, desain, dan kebiasaan kecil yang membantu bekerja lebih tenang.
            </p>

            <a href="{{ url('/artikel') }}" class="btn btn-dark px-4 py-2">
                Mulai membaca
            </a>
        </div>
    </main>

    <footer class="border-top text-center text-secondary py-4">
        <small>© 2026 Website Artikel</small>
    </footer>

</body>
</html>
