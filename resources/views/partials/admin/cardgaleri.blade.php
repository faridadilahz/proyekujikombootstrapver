@forelse($galeris as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm border-0 rounded-3">
            <!-- 🟢 Fix 1: Atribut style dimasukkan ke dalam tag img, Fix 2: $item->gambargaleri (tanpa $) -->
            <img src="{{ asset('storage/' . $item->gambargaleri) }}" 
                 alt="{{ $item->judulgaleri }}" 
                 class="card-img-top" 
                 style="height: 200px; object-fit: cover;">

            <div class="card-body d-flex flex-column ">
                <small class="text-secondary d-block mb-2">
                    {{ $item->created_at->locale('id')->translatedFormat('d F Y') }}
                </small>

                <!-- 🟢 Fix 3: $item->judulgaleri -->
                <h5 class="card-title fw-bold text-dark mb-2">
                    {{ $item->judulgaleri }}
                </h5>

                <!-- 🟢 Fix 4: $item->deskripsigaleri -->
                <p class="card-text text-secondary small mb-3">
                    {{ Str::limit($item->deskripsigaleri, 100) }}
                </p>

                <!-- Tombol Aksi (Didorong ke paling bawah card) -->
                <div class="d-flex flex-column gap-2 mt-auto">
                    <a href='{{ route('galeri.edit', $item->id) }}'class="btn btn-primary fw-semibold rounded-2 py-2">
                        <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                    </a>

                    <!-- Form Hapus galeri -->
                    <form action='{{ route('galeri.destroy', $item->id) }}' method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')">
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
    <!-- Tampilan jika tidak ada galeri -->
    <div class="col-12  py-5">
        <div class="text-secondary">
            <i class="fa-solid fa-newspaper fs-1 mb-3"></i>
            <h5>Belum Ada galeri</h5>
            <p class="small">Klik tombol "Posting galeri" di atas untuk menambahkan galeri baru.</p>
        </div>
    </div>
@endforelse