<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Posting Berita - Seruli</title>
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

        <style>
        /* Custom Styling Upload Box Garis Putus-putus Presisi UI */
        .upload-area {
            border: 2px dashed #D0D5DD;
            background-color: #FFFFFF;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.2s ease-in-out;
        }
        .upload-area:hover {
            border-color: #0D6EFD;
        }
        .upload-area i {
            font-size: 2.5rem;
            color: #0D6EFD;
        }
    </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="d-flex min-vh-100">
        <!-- Sidebar -->
        @include('partials.admin.sidebar')

        <!-- Main Content Area -->
        <div class="flex-grow-1 p-4" style="background-color: #F5F5F5;">
            <div class="container-fluid" style="max-width: 900px;"> 
                <!-- Form CRUD Berita -->
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- 1. Gambar Berita (Ubah name jadi gambarberita) -->
    <div class="mb-4">
        <label class="form-label text-dark fw-normal mb-2">Gambar Berita</label>
        <div class="upload-area shadow-sm" onclick="document.getElementById('gambarberita').click();">
            <i class="fa-solid fa-cloud-arrow-up mb-2"></i>
            <p class="mb-1 fw-medium text-dark">Masukkan foto berita disini</p>
            <span class="text-secondary small">PNG, JPG maksimal 5 MB</span>
            <span id="file-name" class="d-block text-primary mt-2 small fw-semibold"></span>
        </div>
        <!-- 🟢 Atribut name="gambarberita" -->
        <input type="file" name="gambarberita" id="gambarberita" class="d-none" accept="image/*" onchange="previewFileName(this)" required>
    </div>

    <!-- 2. Judul Berita (Ubah name jadi judulberita) -->
    <div class="mb-4">
        <label for="judulberita" class="form-label text-dark fw-normal mb-2">Judul Berita</label>
        <div class="position-relative">
            <!-- 🟢 Atribut name="judulberita" -->
            <input type="text" name="judulberita" id="judulberita" class="form-control border-0 shadow-sm rounded-3 py-3 pe-5" placeholder="Masukkan judul berita disini" maxlength="255" oninput="updateCharCount(this)" required>
            <span id="char-count" class="position-absolute top-50 end-0 translate-middle-y me-3 text-secondary small">0/255</span>
        </div>
    </div>

    <!-- 3. Deskripsi Berita (Ubah name jadi deskripsiberita) -->
    <div class="mb-4">
        <label for="deskripsiberita" class="form-label text-dark fw-normal mb-2">Deskripsi Berita</label>
        <!-- 🟢 Atribut name="deskripsiberita" -->
        <textarea name="deskripsiberita" id="deskripsiberita" rows="5" class="form-control border-0 shadow-sm rounded-3 p-3" placeholder="Masukkan deskripsi berita disini" required></textarea>
    </div>

    <!-- 4. Tombol Aksi -->
    <div class="d-flex gap-3 mt-4">
        <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 fw-semibold">
            Posting
        </button>
        <a href="{{ route('berita') }}" class="btn btn-outline-primary px-4 py-2 rounded-3 fw-semibold bg-white">
            Batal
        </a>
    </div>

</form>

            </div>
        </div>
    </main>
    @if ($errors->any())
    <div class="alert alert-danger mb-4">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
        // Tampilkan Nama File Pas Di-upload
        function previewFileName(input) {
            const fileNameSpan = document.getElementById('file-name');
            if (input.files && input.files[0]) {
                fileNameSpan.innerText = 'File terpilih: ' + input.files[0].name;
            }
        }

        // Counter Karakter Judul
        function updateCharCount(input) {
            const charCount = document.getElementById('char-count');
            charCount.innerText = input.value.length + '/255';
        }
    </script>
    </body>
</html>
