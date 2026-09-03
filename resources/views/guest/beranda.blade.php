<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Beranda - Seruli</title>
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
    <main>
        <!-- Hero / Section Utama -->
        <div class="text-white text-center d-flex align-items-center justify-content-center" 
     style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(13, 109, 253, 0.500)), url('{{ asset('assets/img/smkn4bogor.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
            <div class="container">
                <h1 class="display-4 fw-bold mb-4">Selamat Datang di Website Seruli</h1>
                <p class="lead mb-4">Website seputar kegiatan sekolah kami.</p>
                <div>
                    <a href="/berita" class="btn btn-light btn-lg me-2 fw-semibold">Lihat Berita</a>
                    <a href="/galeri" class="btn btn-outline-light btn-lg fw-semibold">Lihat Berita</a>
                </div>
            </div>
        </div>

        <!-- Tentang -->
        <div class="text-dark text-center d-flex align-items-center justify-content-center min-vh-100 mw-11" style="background-color: #F5F5F5">
            <div class="container">
                <h1 class="display-6 fw-bold mb-4">Mewujudkan generasi unggul, berkarakter, dan kompeten di bidang
                    teknologi dan kejuruan. Siap kerja, santun, mandiri, dan kreatif.</h1>
                <p class="lead text-muted mb-4 fw-normal">Sekolah Seru Sekali merupakan salah satu Sekolah Menengah
                    Kejuruan
                    negeri unggulan di Kota Bogor yang berkomitmen mencetak lulusan
                    berkarakter, kompeten, dan siap bersaing di dunia industri global.
                    Dengan kurikulum yang terintegrasi dengan kebutuhan industri modern
                    serta fasilitas pembelajaran berbasis teknologi, Sekolah Seru Sekali
                    terus berinovasi dalam melahirkan generasi muda yang ahli di
                    bidangnya.</p>
            </div>
        </div>

        <!-- Jurusan -->
        <div class="py-5" style="background-color: #F5F5F5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Jurusan di Seruli</h2>

                <div class="row g-4">
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100 shadow-sm border-0">
                            <img src {{ asset('img/logopplg.jpg') }} class="card-img-top" alt="PPLG"
                                style="height: 180px; object-fit:cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold">PPLG</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100 shadow-sm border-0">
                            <img src {{ asset('img/logotjkt.jpg') }} class="card-img-top" alt="TJKT"
                                style="height: 180px; object-fit:cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold">TJKT</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100 shadow-sm border-0">
                            <img src {{ asset('img/logotkro.jpg') }} class="card-img-top" alt="TKRO"
                                style="height: 180px; object-fit:cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold">TKRO</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100 shadow-sm border-0">
                            <img src {{ asset('img/logotpfl.jpg') }} class="card-img-top" alt="TPFL"
                                style="height: 180px; object-fit:cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold">TPFL</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Berita -->
        <div class="py-5" style="background-color: #F5F5F5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Berita Terbaru</h2>

                <div class="row g-4 justify-content-center">
                    @include('partials.guest.cardberita')
                </div>
            </div>
        </div>

        <!-- Section Galeri -->
        <div class="py-5" style="background-color: #F5F5F5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Galeri Seruli</h2>

                <div class="row g-4 justify-content-center">
                    @include('partials.guest.cardgaleri')
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('partials.guest.footer')
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
