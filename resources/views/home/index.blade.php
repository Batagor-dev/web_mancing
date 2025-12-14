@extends('layout.public.main')

@section('content')
    <!-- Hero Section -->
    <section class="mb-5 p-2 p-md-4" id="hero">
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

    <!-- About Section -->
    <section class="py-5" id="tentang">
        <div class="container">
            <div class="row align-items-start">
                <!-- Kolom kiri: Konten -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary fw-bold text-uppercase mb-2">
                            Tentang Kami
                        </h6>
                        <h2 class="display-5 fw-bold text-dark mb-0">
                           {{ $profil->judul ?? "-" }}
                        </h2>
                    </div>
                    
                    <p class="lead text-muted mb-5">
                        {{ $profil->deskripsi ?? "-" }}
                    </p>
                    
                   <div class="mb-4">
                        <div class="d-flex align-items-start mb-4">
                            <div class="flex-shrink-0 me-4">
                                <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                    <i class="bi bi-people text-primary fs-3"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h4 class="fw-bold text-dark mb-2">Persaudaraan</h4>
                                <p class="text-muted mb-0">
                                    Membangun jaringan pertemanan antar
                                    pemancing dari seluruh nusantara
                                    tanpa memandang status.
                                </p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="flex-shrink-0 me-4">
                                <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                    <i class="bi bi-water text-primary fs-3"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h4 class="fw-bold text-dark mb-2">Konservasi Alam</h4>
                                <p class="text-muted mb-0">
                                    Menjaga ekosistem perairan dengan
                                    prinsip catch and release untuk
                                    spesies tertentu.
                                </p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-4">
                                <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                    <i class="bi bi-book text-primary fs-3"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 text-start">
                                <h4 class="fw-bold text-dark mb-2">Edukasi Teknik</h4>
                                <p class="text-muted mb-0">
                                    Workshop rutin tentang alat, teknik
                                    casting, jigging, dan spot mancing
                                    terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Kolom kanan: Gambar dan testimoni -->
                <div class="col-lg-6 position-relative">
                    <div class="position-relative rounded-4 overflow-hidden border border-light shadow-lg">
                        @if (!empty($profil?->photo))
                            <img
                                class="img-fluid w-100"
                                style="height: 600px; object-fit: cover;"
                                src="{{ asset('storage/' . $profil->photo) }}"
                                alt="Foto Profil"
                            >
                        @else
                            <div class="d-flex align-items-center justify-content-center bg-secondary text-white"
                                style="height: 600px;">
                                <span class="fs-5">Tidak ada photo</span>
                            </div>
                        @endif

                    </div>
                    
                    <!-- Efek dekoratif -->
                    <div class="position-absolute top-0 end-0 translate-middle-y bg-primary bg-opacity-10 rounded-circle"
                        style="width: 200px; height: 200px; filter: blur(50px); z-index: -1;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-dark mb-3">Struktur Organisasi</h2>
                    <p class="text-muted lead">Tim kepengurusan komunitas pemancing yang berdedikasi</p>
                </div>
            </div>

            <div class="position-relative px-4">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        @forelse ($struktur as $item)
                            <div class="swiper-slide">
                                <div class="card member-card border-0 overflow-hidden position-relative h-100" style="aspect-ratio: 3/4;">
                                    <div class="position-relative w-100 h-100">
                                        <img
                                            src="{{ $item->photo 
                                                ? asset('storage/uploads/stuktural/' . $item->photo) 
                                                : asset('images/default-user.jpg') }}"
                                            class="position-absolute top-0 start-0 w-100 h-100"
                                            style="object-fit: cover;"
                                            alt="{{ $item->name }}"
                                        >

                                        <div class="card-img-overlay d-flex flex-column justify-content-end p-4 text-white"
                                            style="background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.3), transparent);">

                                            <div class="mb-2">
                                                <span class="badge bg-primary bg-opacity-75 px-3 py-2">
                                                    {{ $item->jabatan ?? 'Jabatan belum diisi' }}
                                                </span>
                                            </div>

                                            <h4 class="fw-bold mb-1">
                                                {{ $item->name ?? 'Nama belum diisi' }}
                                            </h4>

                                            <p class="mb-0 opacity-75">
                                                {{ $item->unit ?? 'Unit belum diisi' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{-- Kalau struktur kosong --}}
                            <div class="swiper-slide">
                                <div class="text-center w-100 py-5">
                                    <h5 class="text-muted">😶‍🌫️ Struktur organisasi belum diisi</h5>
                                    <p class="text-muted small">Silakan tambahkan data kepengurusan terlebih dahulu</p>
                                </div>
                            </div>
                        @endforelse

                    </div>

                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </div>
    </section>


    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{asset('forntend/css/struktur.css')}}">
    @endpush

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{asset('forntend/js/struktur.js')}}"></script>
    @endpush
@endsection
