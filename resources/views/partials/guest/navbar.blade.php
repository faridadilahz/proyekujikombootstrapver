@vite(['resources/js/app.js'])

<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-5 fixed-top z-3 p-3">
    <a class="navbar-brand fw-bold" href="/beranda">Seruli</a> 

    <div class="collapse navbar-collapse position-absolute start-50 translate-middle-x" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item-active me-4">
                <a class="nav-link {{  request()->is('beranda') || request()->is('/') ? 'active' : '' }}" href="/beranda">Beranda</a>
            </li>
            <li class="nav-item me-4">
                <a class="nav-link {{  request()->is('berita') || request()->is('/') ? 'active' : '' }}" href="/berita">Berita</a>
            </li>
            <li class="nav-item me-4">
                <a class="nav-link {{  request()->is('galeri') || request()->is('/') ? 'active' : '' }}" href="/galeri">Galeri</a>
            </li>
        </ul>
    </div>
        <div class="ms-auto">
            <a class="btn btn-light text-primary fw-semibold" href="/login">Masuk</a>
            </div>
</nav>