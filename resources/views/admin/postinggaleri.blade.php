<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Posting galeri - Seruli</title>
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
    <main class="d-flex min-vh-100">
        <!-- Sidebar -->
        @include('partials.admin.sidebar')

        <!-- Main Content Area -->
        <div class="flex-grow-1 p-4" style="background-color: #F5F5F5;">
            <div class="container-fluid" style="max-width: 900px;">
                <!-- Form CRUD galeri -->
                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="gambargaleri" class="form-label text-dark fw-semibold">Gambar Berita</label>
                        <input type="file" name="gambargaleri" id="gambargaleri" class="form-control"
                            accept="image/*" required>
                        <div class="form-text small text-secondary">Format: PNG, JPG, JPEG (Maksimal 5 MB)</div>
                    </div>

                    <!-- 2. Judul galeri (Ubah name jadi judulgaleri) -->
                    <div class="mb-4">
                        <label for="judulgaleri" class="form-label text-dark fw-normal mb-2">Judul galeri</label>
                        <div class="position-relative">
                            <!-- 🟢 Atribut name="judulgaleri" -->
                            <input type="text" name="judulgaleri" id="judulgaleri"
                                class="form-control border-0 shadow-sm rounded-3 py-3 pe-5"
                                placeholder="Masukkan judul galeri disini" maxlength="255"
                                oninput="updateCharCount(this)" required>
                            <span id="char-count"
                                class="position-absolute top-50 end-0 translate-middle-y me-3 text-secondary small">0/255</span>
                        </div>
                    </div>

                    <!-- 4. Tombol Aksi -->
                    <div class="d-flex gap-3 mt-4">
                        <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 fw-semibold">
                            Posting
                        </button>
                        <a href="{{ route('galeri') }}"
                            class="btn btn-outline-primary px-4 py-2 rounded-3 fw-semibold bg-white">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

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
