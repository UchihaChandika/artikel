
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Tulisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white text-dark">

    <header class="bg-black">
        <nav class="container d-flex flex-wrap align-items-center py-3 gap-3">
            <a href="{{ url('/home') }}" class="text-white text-decoration-none fs-4 fw-bold me-auto">
                Tulisan
            </a>

            <a href="{{ url('/home') }}" class="text-secondary text-decoration-none">Home</a>
            <a href="{{ url('/artikel') }}" class="text-secondary text-decoration-none">Artikel</a>
            <a href="{{ url('/profil') }}" class="text-white text-decoration-none border-bottom border-2 border-white pb-1">Profil</a>
            <a href="{{ url('/login') }}" class="btn btn-light btn-sm px-3">Masuk</a>
        </nav>
    </header>

    <main class="container py-5">

        <div class="mx-auto" style="max-width: 420px;">

            <!-- FOTO PROFIL -->
            <div class="text-center mb-4">
                <img
                    src="https://i.pravatar.cc/150?img=12"
                    alt="Foto Profil"
                    class="rounded-circle border"
                    width="120"
                    height="120"
                >

                <h3 class="fw-semibold mt-3">username</h3>
                <p class="text-secondary">Pengguna Website</p>
            </div>

            <hr class="my-4">

            <!-- UBAH PASSWORD -->
            <h4 class="fw-semibold mb-3">Ubah password</h4>

            <form action="#" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Password saat ini</label>
                    <input
                        type="password"
                        name="old_password"
                        class="form-control form-control-lg"
                        placeholder="Masukkan password saat ini"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Password baru</label>
                    <input
                        type="password"
                        name="new_password"
                        class="form-control form-control-lg"
                        placeholder="Masukkan password baru"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Ulangi password baru</label>
                    <input
                        type="password"
                        name="confirm_password"
                        class="form-control form-control-lg"
                        placeholder="Ulangi password baru"
                    >
                </div>

                <button type="submit" class="btn btn-dark w-100 py-2 mt-2">
                    Simpan password
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="{{ url('/login') }}" class="text-dark fw-semibold">
                    Keluar
                </a>
            </div>

        </div>

    </main>

    <footer class="border-top text-center text-secondary py-4">
        <small>© 2026 Website Artikel</small>
    </footer>

</body>
</html>
