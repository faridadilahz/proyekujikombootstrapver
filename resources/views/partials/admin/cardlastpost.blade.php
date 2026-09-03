@forelse($lastPosts as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm border-0 rounded-3">
            <!-- Image & Badge Tipe (Berita / Galeri) -->
            <div class="position-relative">
                <img src="{{ asset('storage/' . $item->gambar) }}" 
                     alt="{{ $item->judul }}" 
                     class="card-img-top rounded-top-3" 
                     style="height: 180px; object-fit: cover;">
                
                <span class="position-absolute top-0 end-0 badge {{ $item->tipe == 'Berita' ? 'bg-primary' : 'bg-success' }} m-2 px-2 py-1">
                    {{ $item->tipe }}
                </span>
            </div>

            <div class="card-body d-flex flex-column">
                <small class="text-secondary d-block mb-2">
                    {{ $item->created_at->locale('id')->translatedFormat('d F Y') }}
                </small>
                <h6 class="card-title fw-bold text-dark mb-2">
                    {{ Str::limit($item->judul, 40) }}
                </h6>
                <p class="card-text text-secondary small mb-0">
                    {{ Str::limit($item->deskripsi, 70) }}
                </p>
            </div>
        </div>
    </div>
@empty
    <div class="col-12 text-center py-4 text-secondary">
        <i class="fa-solid fa-folder-open fs-2 mb-2"></i>
        <p class="mb-0">Belum ada postingan berita atau galeri.</p>
    </div>
@endforelse