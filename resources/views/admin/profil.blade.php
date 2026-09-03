<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Profil - Seruli</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="d-flex min-vh-100">
        <!-- Partials Sidebar (Sticky) -->
        @include('partials.admin.sidebar')

        <!-- Main Content Area -->
        <div class="flex-grow-1 p-4" style="background-color: #F5F5F5;">
            <div class="container-fluid">
                
                <!-- Breadcrumb / Header Title -->
                <h5 class="text-secondary fw-normal mb-4">Akun</h5>

                <!-- Grid Layout (2 Kolom Presisi) -->
                <div class="row g-4">
                    
                    <!-- 1. CARD PROFIL (KOLOM KIRI) -->
                    <div class="col-lg-5 col-md-6">
                        <div class="card border-0  rounded-4 p-4 text-center h-100 justify-content-center">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center py-4">
                                
                                <!-- Logo/Avatar Bulat -->
                                <div class="mb-3">
                                    <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 110px; height: 110px;">
                                        <i class="fa-solid fa-bars-staggered text-primary fs-1"></i>
                                    </div>
                                </div>

                                <!-- Nama & Email Dinamis dari Seeder/Auth -->
                                <h4 class="fw-bold text-primary mb-1">{{ Auth::user()->name ?? 'Admin Seruli' }}</h4>
                                <p class="text-secondary small mb-3">{{ Auth::user()->email ?? 'adminseruli@gmail.com' }}</p>

                                <!-- Tombol Edit -->
                                <a href="{{ Route::has('admin.akun.edit') ? route('admin.akun.edit') : '#' }}" class="btn btn-link text-primary text-decoration-none fw-semibold p-0 fs-6">
                                    Edit <i class="fa-solid fa-pen-to-square ms-1 small"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- 2. CARD SETTINGS (KOLOM KANAN) -->
                    <div class="col-lg-7 col-md-6 d-flex flex-column gap-3">
                        
                        <!-- Card Kelola Kata Sandi -->
                        <a href="{{ Route::has('admin.kelolakatasandi') ? route('admin.kelolakatasandi') : '#' }}" class="card border-0  rounded-4 p-3 hover-card text-dark text-decoration-none">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="text-primary fs-5">
                                        <i class="fa-solid fa-lock"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Kelola Kata Sandi</h6>
                                        <p class="text-secondary small mb-0">Ganti kata sandi akun Anda secara berkala untuk menjaga keamanan data sekolah</p>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chevron-right text-secondary small ms-3"></i>
                            </div>
                        </a>

                        <!-- Card Keluar dari Akun -->
                        <button type="button" class="card border-0  rounded-4 p-3 hover-card text-start w-100 bg-white" onclick="showLogoutModal()">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="text-danger fs-5">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold text-danger mb-0">Keluar dari Akun</h6>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chevron-right text-danger small ms-3"></i>
                            </div>
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </main>

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 p-3">
                <div class="modal-body text-center">
                    <h5 class="fw-bold mb-2">Keluar dari Akun?</h5>
                    <p class="text-secondary small mb-4">Anda akan keluar dari admin Seruli Anda. Apakah Anda yakin ingin melanjutkan?</p>
                    
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                        <div class="d-flex justify-content-center gap-2">
                            <button type="button" class="btn btn-light rounded-3 px-4 fw-semibold" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger rounded-3 px-4 fw-semibold">Ya, Keluar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>

        <script>
        function showLogoutModal() {
            var myModal = new bootstrap.Modal(document.getElementById('logoutModal'));
            myModal.show();
        }
    </script>
    </body>
</html>
