<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Login - Seruli</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="d-flex align-items-center justify-content-center"
            style="background-image: linear-gradient(rgb(13, 109, 253), rgba(13, 109, 253, 0.500)), url('{{ asset('assets/img/smkn4bogor.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-5">

                        <div class="card border-0 shadow-lg rounded-2 p-2">
                            <div class="card-body">

                                <div class="text-center mb-4">
                                    <a href="/beranda" class="h3 fw-bold text-primary text-decoration-none">Seruli</a>
                                    <p class="text-secondary small mt-1">Masuk ke Admin Seruli</p>
                                </div>

                                <form action="/login" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold text-secondary small">Alamat
                                            Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Masukkan Alamat Email" required autofocus />
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label fw-semibold text-secondary small">Kata
                                            Sandi</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Masukkan Kata Sandi" required />
                                    </div>

                                    <button type="submit"
                                        class="btn btn-primary w-100 fw-semibold py-2 rounded-2 mt-2">
                                        Masuk
                                    </button>
                                </form>

                                <div class="text-center mt-3">
                                    <a href="/beranda" class="small text-secondary text-decoration-none">
                                        &larr; Kembali ke Beranda
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
