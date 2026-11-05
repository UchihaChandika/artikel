
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Tulisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white text-dark">

    <header class="bg-black">
        <nav class="container d-flex align-items-center py-3">
            <a href="{{ url('/home') }}" class="text-white text-decoration-none fs-4 fw-bold">
                Tulisan
            </a>
        </nav>
    </header>

    <main class="container py-5">

        <div class="mx-auto mt-4" style="max-width: 380px;">

            <h1 class="fw-semibold mb-2">Masuk</h1>

            <p class="text-secondary mb-4">
                Masuk untuk membuka profil Anda.
            </p>

            <form action="#" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input
                        type="text"
                        name="username"
                        class="form-control form-control-lg"
                        placeholder="Masukkan username"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control form-control-lg"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-dark btn-lg w-100 mt-3">
                    Masuk
                </button>

            </form>

            <p class="text-center text-secondary mt-4">
                © 2026 Website Artikel
            </p>

        </div>

    </main>

</body>
</html>
