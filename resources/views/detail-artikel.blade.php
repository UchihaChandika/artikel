<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel - Tulisan</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white text-dark">

    <!-- Navbar -->
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

    <!-- Isi Artikel -->
    <main class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <a href="{{ url('/artikel') }}" class="text-secondary text-decoration-none small">
                    Kembali ke artikel
                </a>

                <!-- Judul -->
                <h1 class="display-5 fw-semibold mt-4 mb-3">
                    Perkembangan Teknologi Digital dan Pengaruhnya terhadap Kehidupan Manusia
                </h1>

                <!-- Kategori, tanggal, penulis -->
                <p class="text-secondary small mb-4">
                    Teknologi · 6 November 2026 · 5 menit membaca · Admin Tulisan
                </p>

                <!-- Foto Artikel -->
                <div class="ratio ratio-16x9">
                    <img
                        src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1200"
                        class="rounded-3 object-fit-cover"
                        alt="Ilustrasi teknologi digital"
                    >
                </div>

                <p class="text-secondary small mt-2 mb-5">
                    Ilustrasi perkembangan teknologi digital dalam kehidupan modern.
                </p>

                <!-- Konten Artikel -->
                <article class="fs-5 lh-lg">

                    <p>
                        Perkembangan teknologi digital telah membawa perubahan besar
                        dalam kehidupan manusia. Berbagai aktivitas yang sebelumnya
                        dilakukan secara manual kini dapat diselesaikan dengan lebih
                        cepat melalui bantuan teknologi.
                    </p>

                    <p>
                        Kehadiran internet, smartphone, dan berbagai aplikasi digital
                        membuat manusia semakin mudah memperoleh informasi,
                        berkomunikasi, serta melakukan pekerjaan sehari-hari.
                        Teknologi juga memberikan kemudahan dalam bidang pendidikan,
                        kesehatan, bisnis, dan pemerintahan.
                    </p>

                    <h3 class="fw-semibold mt-5 mb-3">
                        Peran Teknologi dalam Kehidupan Sehari-hari
                    </h3>

                    <p>
                        Dalam bidang pendidikan, teknologi memungkinkan proses
                        pembelajaran dilakukan secara daring. Siswa dan mahasiswa
                        dapat mengakses berbagai materi pembelajaran melalui internet
                        tanpa harus selalu berada di ruang kelas.
                    </p>

                    <p>
                        Dalam bidang ekonomi, teknologi digital membantu pelaku usaha
                        memasarkan produk secara lebih luas. Transaksi keuangan juga
                        menjadi lebih praktis dengan adanya layanan pembayaran
                        digital dan perbankan online.
                    </p>

                    <h3 class="fw-semibold mt-5 mb-3">
                        Tantangan di Era Digital
                    </h3>

                    <p>
                        Meskipun memberikan banyak manfaat, perkembangan teknologi
                        juga menghadirkan sejumlah tantangan. Penyebaran informasi
                        palsu, kebocoran data pribadi, dan ketergantungan terhadap
                        perangkat digital menjadi beberapa permasalahan yang perlu
                        diperhatikan.
                    </p>

                    <p>
                        Oleh karena itu, masyarakat perlu memiliki kemampuan literasi
                        digital agar dapat menggunakan teknologi secara bijak.
                        Pengguna juga harus memahami pentingnya menjaga keamanan data
                        pribadi ketika menggunakan layanan digital.
                    </p>

                    <h3 class="fw-semibold mt-5 mb-3">
                        Kesimpulan
                    </h3>

                    <p>
                        Teknologi digital merupakan bagian penting dari kehidupan
                        modern. Pemanfaatan teknologi secara tepat dapat meningkatkan
                        produktivitas dan memberikan kemudahan dalam berbagai bidang.
                        Namun, penggunaan teknologi harus diimbangi dengan kesadaran
                        akan keamanan dan tanggung jawab digital.
                    </p>

                </article>

                <!-- Tombol Kembali -->
                <hr class="my-5">

                <a href="{{ url('/artikel') }}" class="btn btn-dark px-4 py-2">
                    Kembali ke artikel
                </a>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-top text-center text-secondary py-4">
        <small>© 2026 Tulisan. Semua hak dilindungi.</small>
    </footer>

</body>
</html>