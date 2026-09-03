<header class="d-flex justify-content-between align-items-center bg-white p-3 rounded-3 shadow-sm mb-4">
    <!-- Topbar Left: Title & Subtitle -->
    <div class="topbar-left">
        @if(request()->routeIs('admin.dasbor') || request()->is('admin/dasbor'))
            <h4 class="fw-bold mb-1 text-dark">Dasbor Seruli</h4>
            <p class="text-secondary small mb-0">Selamat datang kembali di panel kontrol Admin Seruli.</p>

        @elseif(request()->routeIs('admin.berita*') || request()->is('admin/berita*'))
            <h4 class="fw-bold mb-1 text-dark">Kelola Berita</h4>
            <p class="text-secondary small mb-0">Tambah, ubah, atau hapus postingan berita sekolah.</p>

        @elseif(request()->routeIs('admin.galeri*') || request()->is('admin/galeri*'))
            <h4 class="fw-bold mb-1 text-dark">Kelola Galeri</h4>
            <p class="text-secondary small mb-0">Atur album dan dokumentasi foto kegiatan sekolah.</p>

        @elseif(request()->routeIs('admin.faq*') || request()->is('admin/faq*'))
            <h4 class="fw-bold mb-1 text-dark">Kelola FAQ</h4>
            <p class="text-secondary small mb-0">Daftar pertanyaan yang sering ditanyakan pengunjung.</p>

        @elseif(request()->routeIs('admin.akun*') || request()->is('admin/akun*'))
            <h4 class="fw-bold mb-1 text-dark">Akun Admin</h4>
            <p class="text-secondary small mb-0">Pengaturan akun dan informasi akun admin.</p>

        @else
            <h4 class="fw-bold mb-1 text-dark">{{ $pageTitle ?? 'Panel Admin' }}</h4>
            <p class="text-secondary small mb-0">{{ $pageSubtitle ?? 'Kelola konten aplikasi Seruli.' }}</p>
        @endif
    </div>

    <!-- Topbar Right: Action / Search & Buttons -->
    <div class="topbar-right d-flex align-items-center gap-3">
        @if(request()->routeIs('admin.berita') || request()->is('admin/berita'))
            <div class="input-group" style="width: 250px;">
                <span class="input-group-text bg-light border-end-0">
                    <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                </span>
                <input type="text" class="form-control bg-light border-start-0 ps-0" placeholder="Cari Berita..." id="searchBeritaInput">
            </div>
            <a href="{{ Route::has('admin.berita.posting') ? route('admin.berita.posting') : '/admin/berita/posting' }}" class="btn btn-primary d-flex align-items-center gap-2 fw-semibold">
                <i class="fa-solid fa-plus"></i>
                <span>Posting Berita</span>
            </a>

        @elseif(request()->routeIs('admin.galeri') || request()->is('admin/galeri'))
            <div class="input-group" style="width: 250px;">
                <span class="input-group-text bg-light border-end-0">
                    <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                </span>
                <input type="text" class="form-control bg-light border-start-0 ps-0" placeholder="Cari Galeri..." id="searchGaleriInput">
            </div>
            <a href="{{ Route::has('admin.galeri.posting') ? route('admin.galeri.posting') : '/admin/galeri/posting' }}" class="btn btn-primary d-flex align-items-center gap-2 fw-semibold">
                <i class="fa-solid fa-plus"></i>
                <span>Posting Galeri</span>
            </a>
        @endif
    </div>
</header>