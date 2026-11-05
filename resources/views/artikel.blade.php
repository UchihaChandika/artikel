<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Tulisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Judul artikel bergaris bawah saat kursor diarahkan ke kartu */
        .artikel-link:hover h2,
        .artikel-link:hover h4 { text-decoration: underline; }
        .artikel-link:focus-visible { outline: 2px solid #4c8dff; outline-offset: 2px; }
    </style>
</head>
<body class="bg-white text-dark">

    <header class="bg-black">
        <nav class="container d-flex flex-wrap align-items-center py-3 gap-3">
            <a href="{{ url('/home') }}" class="text-white text-decoration-none fs-4 fw-bold me-auto">
                Tulisan
            </a>

            <a href="{{ url('/home') }}" class="text-secondary text-decoration-none">Home</a>
            <a href="{{ url('/artikel') }}" class="text-white text-decoration-none border-bottom border-2 border-white pb-1">Artikel</a>
            <a href="{{ url('/profil') }}" class="text-secondary text-decoration-none">Profil</a>
            <a href="{{ url('/login') }}" class="btn btn-light btn-sm px-3">Masuk</a>
        </nav>
    </header>

    <main class="container py-5" style="max-width: 1000px;">

        <h1 class="display-5 fw-semibold mb-4">Artikel</h1>

        <!-- PENCARIAN -->
        <form action="{{ url('/artikel') }}" method="GET" class="mb-4">
            <input
                type="search"
                name="search"
                class="form-control form-control-lg rounded-2"
                placeholder="Cari artikel..."
                value="{{ request('search') }}"
            >
        </form>

        <!-- ARTIKEL UNGGULAN -->
        <a href="{{ url('/detail-artikel') }}" class="artikel-link d-block text-decoration-none text-reset mb-3">
            <article class="bg-black text-white rounded-3 p-4 p-md-5">
                <small class="text-secondary">Produktivitas · 3 Nov 2026</small>

                <h2 class="fw-semibold mt-2 mb-3">
                    Menulis dengan tenang di tengah banyak gangguan
                </h2>

                <p class="text-light mb-0">
                    Tiga kebiasaan sederhana yang membuat sesi menulis lebih fokus tanpa perlu aplikasi tambahan.
                </p>
            </article>
        </a>

        <!-- DAFTAR ARTIKEL -->
        <div class="list-group list-group-flush">

            <a href="{{ url('/detail-artikel') }}" class="artikel-link d-block text-decoration-none text-reset">
                <article class="py-4 border-bottom">
                    <small class="text-secondary">Teknologi · 28 Okt 2026</small>
                    <h4 class="fw-semibold mt-2">Mengenal dasar jaringan komputer</h4>
                    <p class="text-secondary mb-0">
                        Dari IP address sampai DNS: gambaran singkat bagaimana perangkat saling berkomunikasi.
                    </p>
                </article>
            </a>

            <a href="{{ url('/detail-artikel') }}" class="artikel-link d-block text-decoration-none text-reset">
                <article class="py-4 border-bottom">
                    <small class="text-secondary">Desain · 21 Okt 2026</small>
                    <h4 class="fw-semibold mt-2">Memilih tipografi untuk situs yang nyaman dibaca</h4>
                    <p class="text-secondary mb-0">
                        Ukuran huruf, jarak baris, dan lebar kolom yang membuat tulisan panjang tetap enak dibaca.
                    </p>
                </article>
            </a>

            <a href="{{ url('/detail-artikel') }}" class="artikel-link d-block text-decoration-none text-reset">
                <article class="py-4 border-bottom">
                    <small class="text-secondary">Teknologi · 14 Okt 2026</small>
                    <h4 class="fw-semibold mt-2">Belajar pemrograman web dari nol</h4>
                    <p class="text-secondary mb-0">
                        Urutan belajar HTML, CSS, dan JavaScript yang realistis untuk pemula.
                    </p>
                </article>
            </a>

            <a href="{{ url('/detail-artikel') }}" class="artikel-link d-block text-decoration-none text-reset">
                <article class="py-4 border-bottom">
                    <small class="text-secondary">Produktivitas · 7 Okt 2026</small>
                    <h4 class="fw-semibold mt-2">Catatan kecil tentang kebiasaan membaca</h4>
                    <p class="text-secondary mb-0">
                        Cara menjaga kebiasaan membaca dua puluh menit setiap hari.
                    </p>
                </article>
            </a>

        </div>

    </main>

    <footer class="border-top text-center text-secondary py-4">
        <small>© 2026 Website Artikel</small>
    </footer>

</body>
</html>