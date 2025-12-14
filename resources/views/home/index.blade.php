@extends('layout.public.main')

@section('content')
    <!-- Hero Section -->
    <section class="mb-5 p-2 p-md-4">
    @if(isset($banners) && count($banners) > 0)
    @php $banner = $banners->first(); @endphp

    <div class="position-relative overflow-hidden rounded-4 rounded-md-5 min-vh-50 min-vh-md-75">

        <img src="{{ asset('storage/' . $banner->photo) }}"
            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover">

        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-25"></div>

        <div class="position-relative h-100">
            <div class="container h-100 d-flex align-items-center p-4">
                <div class="text-white col-lg-6 pt-3 pt-md-5">

                    <span class="badge rounded-pill bg-light bg-opacity-25 text-white 
                                px-2 px-md-3 py-1 py-md-2 mb-2 mb-md-3">
                        KOLEKSI BARU 2024
                    </span>

                    <!-- JUDUL -->
                    <h1 class="fw-bold mb-1 fs-4 fs-md-3 fs-lg-1 lh-sm">
                        Taklukan Samudera
                    </h1>

                    <!-- SUB JUDUL -->
                    <h2 class="fw-light fst-italic mb-2 fs-5 fs-md-4 fs-lg-2 lh-sm">
                        Bersama Kami
                    </h2>

                    <!-- DESKRIPSI -->
                    <p class="mb-3 mb-md-4 small lh-sm">
                        APRI adalah rumah bagi para pemancing yang menjadikan laut sebagai guru, 
                        kesabaran sebagai senjata, dan kebersamaan sebagai hasil tangkapan terbaik.
                    </p>

                    <!-- BUTTON -->
                    <div class="d-flex gap-2 gap-md-3 flex-wrap">
                        <a href="#" class="btn btn-primary btn-sm btn-md-lg rounded-pill px-3 px-md-4">
                            <i class="bi bi-person-plus me-2"></i>
                            Daftar Sekarang
                        </a>

                        <a href="#" class="btn btn-outline-light btn-sm btn-md-lg rounded-pill px-3 px-md-4">
                            <i class="bi bi-images me-2"></i>
                            Lihat Kegiatan Kami
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>
    @endif
</section>



    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Fitur Utama</h2>
            <div class="row g-4">
                @foreach ($features ?? [] as $feature)
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-{{ $feature['icon'] }} text-primary fs-1"></i>
                            </div>
                            <h4 class="card-title">{{ $feature['title'] }}</h4>
                            <p class="card-text">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Additional Content -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Tentang Aplikasi Kami</h2>
                    <p class="lead">
                        Aplikasi ini dibangun dengan teknologi terbaru untuk memberikan 
                        pengalaman terbaik bagi pengguna.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Responsive Design</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Fast Performance</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Secure & Reliable</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" alt="About Image" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
@endsection
