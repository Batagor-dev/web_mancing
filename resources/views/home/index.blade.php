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
                            {{ $profil->judul ?? '-' }}
                        </h2>
                    </div>

                    <p class="lead text-muted mb-5">
                        {{ $profil->deskripsi ?? '-' }}
                    </p>

                    <!-- POIN (STRUKTUR ASLI, CUMA DINAMIS) -->
                    <div class="mb-4">
                        @if(is_array($profil?->poin) && count($profil->poin) > 0)
                            @foreach($profil->poin as $item)
                                <div class="d-flex align-items-start mb-4">
                                    <div class="flex-shrink-0 me-4">
                                        <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-circle p-3 d-flex align-items-center justify-content-center"
                                            style="width: 70px; height: 70px;">
                                            <i class="bi {{ $item['icon'] }} text-primary fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-start">
                                        <h4 class="fw-bold text-dark mb-2">
                                            {{ $item['judul'] }}
                                        </h4>
                                        <p class="text-muted mb-0">
                                            {{ $item['deskripsi'] }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Kolom kanan: Gambar -->
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

    <!-- Gallery Section -->
<section class="py-5" id="gallery">
    <div class="container">

        <!-- Judul -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Gallery</h2>
            <p class="text-muted">
                Dokumentasi kegiatan dan momen kebersamaan
            </p>
        </div>

        <!-- Grid Gallery -->
        <div class="row g-4">
            @forelse ($galery as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="gallery-card h-100">
                        <div class="gallery-image">
                            <img 
                                src="{{ asset('storage/' . $item->photo) }}" 
                                alt="{{ $item->title }}"
                            >

                            <div class="gallery-overlay">
                                <h5 class="fw-semibold mb-1">
                                    {{ $item->title }}
                                </h5>
                                <p class="small mb-0">
                                    {{ \Carbon\Carbon::parse($item->time)->translatedFormat('d F Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Belum ada galeri ditampilkan</p>
                </div>
            @endforelse
        </div>

        {{-- ✅ VIEW ALL DI LUAR GRID --}}
        @if ($totalGalery > 6)
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <a href="{{ url('/home/galery') }}"
                       class="btn btn-outline-dark w-100 py-3">
                        View All Gallery
                    </a>
                </div>
            </div>
        @endif

    </div>
</section>



<!-- Events Section -->
<section class="py-5 bg-white" id="events">
    <div class="container">

        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-center mb-5 flex-wrap gap-3">
            <div>
                <h2 class="fw-bold mb-1">Upcoming Community Events</h2>
                <p class="text-muted mb-0">
                    Ikuti turnamen, workshop, dan kegiatan komunitas terbaru
                </p>
            </div>
        </div>

        <!-- Event Cards -->
        <div class="row g-4">

            @forelse ($kegiatans as $event)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="event-card h-100">

                        <!-- Image -->
                        <div class="event-image position-relative">
                            <img
                                src="{{ asset('storage/' . $event->photo) }}"
                                alt="{{ $event->title }}"
                            >

                            <!-- Date Badge -->
                            @if(!empty($event->waktu))
                                <div class="event-date text-center">
                                    <span class="month">
                                        {{ \Carbon\Carbon::parse($event->waktu)->translatedFormat('M') }}
                                    </span>
                                    <span class="day">
                                        {{ \Carbon\Carbon::parse($event->waktu)->format('d') }}
                                    </span>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="p-4">
                            <p class="text-muted small mb-2">
                                <i class="bi bi-calendar-event me-1"></i>
                                {{ $event->waktu
                                    ? \Carbon\Carbon::parse($event->waktu)->translatedFormat('d F Y')
                                    : 'Tanggal belum ditentukan' }}
                            </p>

                            <h5 class="fw-bold mb-2">
                                {{ $event->title }}
                            </h5>

                            <p class="text-muted small mb-4">
                                {{ \Illuminate\Support\Str::limit(strip_tags($event->deskripsi), 90) }}
                            </p>

                            <!-- Button Modal -->
                            <button
                                class="btn btn-outline-primary w-100 rounded-pill"
                                data-bs-toggle="modal"
                                data-bs-target="#eventModal{{ $event->id }}">
                                Lihat Detail
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Modal Detail Event -->
                <div class="modal fade" id="eventModal{{ $event->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content rounded-4 overflow-hidden">

                            <div class="modal-body p-0">
                                <img
                                    src="{{ asset('storage/' . $event->photo) }}"
                                    class="img-fluid w-100"
                                    alt="{{ $event->title }}"
                                >
                            </div>

                            <div class="modal-body p-4">
                                <h4 class="fw-bold mb-2">
                                    {{ $event->title }}
                                </h4>

                                @if($event->waktu)
                                    <p class="text-muted small mb-3">
                                        <i class="bi bi-calendar-event me-1"></i>
                                        {{ \Carbon\Carbon::parse($event->waktu)->translatedFormat('d F Y, H:i') }}
                                    </p>
                                @endif

                                <div class="text-muted lh-lg">
                                    {!! nl2br(e($event->deskripsi)) !!}
                                </div>

                                <button
                                    type="button"
                                    class="btn btn-secondary mt-4 w-100 rounded-pill"
                                    data-bs-dismiss="modal">
                                    Tutup
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada event yang dijadwalkan</p>
                    </div>
                @endforelse

            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 position-relative overflow-hidden" id="cta">
        <div class="container">

            <div class="row align-items-center gy-4">

                <!-- Left Content -->
                <div class="col-lg-7 text-white">
                    <span class="badge bg-light bg-opacity-25 mb-3 px-3 py-2 rounded-pill">
                        Bergabung Bersama Kami
                    </span>

                    <h2 class="fw-bold display-6 mb-3">
                        Siap Menjadi Bagian dari Komunitas Kami?
                    </h2>

                    <p class="lead opacity-75 mb-4">
                        Daftarkan diri Anda sekarang dan jadilah bagian dari
                        komunitas yang menjunjung persaudaraan, edukasi,
                        dan kecintaan terhadap alam.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="javascript:void(0)"
                        class="btn btn-light btn-lg rounded-pill px-4">
                            <i class="bi bi-person-plus me-2"></i>
                            Daftar Sekarang
                        </a>

                        <a href="https://wa.me/628123456789"
                        target="_blank"
                        class="btn btn-outline-light btn-lg rounded-pill px-4">
                            <i class="bi bi-whatsapp me-2"></i>
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <!-- Right Decorative -->
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="cta-card text-white p-4 rounded-4 shadow-lg">
                        <h5 class="fw-bold mb-3">Kenapa Harus Bergabung?</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Jaringan pemancing seluruh Indonesia
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Event & workshop rutin
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Edukasi & konservasi alam
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Solidaritas & persaudaraan
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

        <!-- Decorative Blur -->
        <div class="cta-blur"></div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-white" id="contact">
        <div class="container">
            <div class="row align-items-start g-5">

                <!-- Left Info -->
                <div class="col-lg-5">
                    <h2 class="fw-bold mb-3">Hubungi kami</h2>
                    <p class="text-muted mb-4">
                        Punya pertanyaan seputar keanggotaan, event, atau kerja sama?
                        Jangan ragu untuk menghubungi kami.
                    </p>

                    <!-- Address -->
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Alamat</h6>
                            <p class="text-muted mb-0">
                                Jl. Pantai Samudera No.123<br>
                                Indonesia
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email</h6>
                            <p class="text-muted mb-0">
                                info@komunitas.com<br>
                                event@komunitas.com
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="d-flex">
                        <div class="contact-icon me-3">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Telepon</h6>
                            <p class="text-muted mb-0">
                                Senin – Jumat (08.00 – 17.00)<br>
                                +62 812 3456 7890
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-7">
                    <div class="contact-form-card">

                        <form action="javascript:void(0)">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Anda">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" placeholder="email@example.com">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Pesan</label>
                                <textarea rows="4" class="form-control" placeholder="Apa yang bisa kami bantu?"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 rounded-pill py-2">
                                Kirim Pesan
                            </button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>


    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{asset('forntend/css/struktur.css')}}">
        <link rel="stylesheet" href="{{asset('forntend/css/galery.css')}}">
        <link rel="stylesheet" href="{{asset('forntend/css/kegiatan.css')}}">
        <link rel="stylesheet" href="{{asset('forntend/css/cta.css')}}">
    @endpush

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{asset('forntend/js/struktur.js')}}"></script>
    @endpush
@endsection
