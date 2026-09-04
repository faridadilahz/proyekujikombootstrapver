@forelse($galeris as $item)

    <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('storage/' . $item->gambargaleri) }}" class="card-img-top" alt="Berita 1"
                style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <small class="text-secondary d-block mb-2">{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</small>
                <h5 class="card-title fw-bold mb-3">{{ $item->judulgaleri }}</h5>
                <div class="d-flex flex-column">
                    <a href="galeri" class="btn btn-primary fw-semibold p-2">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <!-- Tampilan jika tidak ada berita -->
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-newspaper fs-1 mb-3"></i>
            <h5>Belum Ada Berita</h5>
        </div>
    </div>
    @endforelse