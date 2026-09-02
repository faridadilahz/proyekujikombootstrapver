<div class="card border-0 shadow-sm rounded-3 mt-4">
    <div class="card-header bg-white border-0 pt-4 ">
        <div>
            <h5 class="fw-bold text-dark mb-1">Postingan Terakhir</h5>
        </div>
    </div>

    <div class="card-body p-4">
        <div class="row g-4">
            {{-- Menggunakan partials guest sebagai tumbal / preview dummy --}}
            @include('partials.admin.cardlastpost')
        </div>
    </div>
</div>