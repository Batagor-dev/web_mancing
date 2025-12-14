@extends('layout.public.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('forntend/css/banner.css') }}">
@endpush
   
@section('content')
    @if(isset($banners) && count($banners) > 0)
        @php $banner = $banners->first(); @endphp
        
        <!-- Hero Section -->
        <section class="hero-section position-relative overflow-hidden" id="hero">
            <!-- Background Image with Parallax -->
            <div class="hero-bg-wrapper">
                <div class="hero-bg-image" id="hero-bg-image" 
                    style="background-image: url('{{ asset('storage/' . $banner->photo) }}');">
                </div>
                <div class="hero-overlay"></div>
            </div>

            <!-- Animated Particles Background -->
            <div class="particles-container" id="particles-js"></div>

            <!-- Hero Content -->
            <div class="container position-relative" style="z-index: 3;">
                <div class="row min-vh-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10">
                        <!-- Main Heading -->
                        <div class="hero-content">
                            <h1 class="hero-title display-3 fw-bold mb-4 animate-slide-up">
                                Taklukan Samudera
                                <br>Bersama Kami
                            </h1>

                            <p class="hero-description lead mb-5 animate-slide-up" style="--delay: 0.2s">
                                APRI adalah rumah bagi para pemancing yang menjadikan <strong>laut sebagai guru</strong>, 
                                <strong>kesabaran sebagai senjata</strong>, dan <strong>kebersamaan</strong> 
                                sebagai hasil tangkapan terbaik.
                            </p>

                            <!-- CTA Buttons -->
                            <div class="hero-cta d-flex flex-wrap gap-3 justify-content-center mb-5 animate-slide-up" 
                                style="--delay: 0.4s">
                                <a href="{{ route('register') }}" class="btn btn-hero btn-primary">
                                    <i class="bi bi-person-plus-fill me-2"></i>
                                    Daftar Sekarang
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="#video" class="btn btn-hero btn-outline-light">
                                    <i class="bi bi-play-circle-fill me-2"></i>
                                    Video Kegiatan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wave Separator -->
            <div class="waves-container">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="wave-parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </section>

    @else
        <!-- Default Hero Section -->
        <section class="hero-section-default position-relative overflow-hidden">
            <div class="container">
                <div class="row min-vh-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4 animate-slide-up">
                            Selamat Datang di <span class="text-gradient-primary">{{ settings()['title'] ?? config('app.name') }}</span>
                        </h1>
                        <p class="lead mb-5 animate-slide-up" style="--delay: 0.2s">
                            Aplikasi modern berbasis Laravel 10 dengan Bootstrap 5 untuk pengalaman terbaik
                        </p>
                        <a href="#about" class="btn btn-primary btn-lg animate-slide-up" style="--delay: 0.4s">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif


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

@push('scripts')
<script src="{{asset('forntend/js/banner.js')}}></script>
@endpush

