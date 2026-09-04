<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>{{ $galeris->judulgaleri }} - Seruli</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <header>
        @include('partials.guest.navbar')
    </header>
    <main class="mt-5 pt-6">
        <div class="container py-5">
            <a href="/galeri" class="btn btn-primary mb-2">
                <i class="fa-solid fa-arrow-left me-2"></i>Kembali ke Galeri
            </a>

            <h2 class="fw-bold mb-2">{{ $galeris->judulgaleri }}</h2>
            <small class="text-secondary d-block mb-4">
                Diposting pada {{ $galeris->created_at->locale('id')->translatedFormat('d F Y, H:i') }} WIB
            </small>

            <img src="{{ asset('storage/' . $galeris->gambargaleri) }}" class="img-fluid rounded-3 mb-4 w-100"
                style="max-height: 400px; object-fit: cover;">
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
