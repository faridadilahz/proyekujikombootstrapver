<!doctype html>
<html lang="id" data-bs-theme="light">
    <head>
        <title>Dasbor Admin - Seruli</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <!-- 🟢 Tambahkan class d-flex di <main> biar Sidebar & Konten berdampingan -->
        <main class="d-flex min-vh-100">
            
            <!-- 1. Partials Sidebar (Kiri) -->
            @include('partials.admin.sidebar')

            <!-- 2. Area Konten Utama (Kanan) -->
            <div class="flex-grow-1 p-4" style="background-color: #F5F5F5;">
                <div class="container-fluid">

                    @include('partials.admin.topbar')
                    @include('partials.admin.statistic')
                </div>
            </div>

        </main>

        <!-- Bootstrap JavaScript Bundle -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        ></script>
    </body>
</html>