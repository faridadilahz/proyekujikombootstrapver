@forelse($beritas as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm border-0 rounded-3">
            <!-- 🟢 Fix 1: Atribut style dimasukkan ke dalam tag img, Fix 2: $item->gambarberita (tanpa $) -->
            <img src="{{ asset('storage/' . $item->gambarberita) }}" 
                 alt="{{ $item->judulberita }}" 
                 class="card-img-top" 
                 style="height: 200px; object-fit: cover;">

            <div class="card-body d-flex flex-column ">
                <small class="text-secondary d-block mb-2">
                    {{ $item->created_at->locale('id')->translatedFormat('d F Y') }}
                </small>

                <!-- 🟢 Fix 3: $item->judulberita -->
                <h5 class="card-title fw-bold text-dark mb-2">
                    {{ $item->judulberita }}
                </h5>

                <!-- 🟢 Fix 4: $item->deskripsiberita -->
                <p class="card-text text-secondary small mb-3">
                    {{ Str::limit($item->deskripsiberita, 100) }}
                </p>

                <!-- Tombol Aksi (Didorong ke paling bawah card) -->
                <div class="d-flex flex-column gap-2 mt-auto">
                    <a href= '{{ route('berita.edit', $item->id) }}' class="btn btn-primary fw-semibold rounded-2 py-2">
                        <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                    </a>

                    <!-- Form Hapus Berita -->
                    <form action= '{{ route('berita.destroy', $item->id) }}' method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger fw-semibold rounded-2 py-2 w-100">
                            <i class="fa-solid fa-trash me-1"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@empty
    <!-- Tampilan jika tidak ada berita -->
    <div class="col-12  py-5">
        <div class="text-secondary">
            <i class="fa-solid fa-newspaper fs-1 mb-3"></i>
            <h5>Belum Ada Berita</h5>
            <p class="small">Klik tombol "Posting Berita" di atas untuk menambahkan berita baru.</p>
        </div>
    </div>
@endforelse