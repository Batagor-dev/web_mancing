@extends('layout.public.main')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        @if(isset($banners) && count($banners) > 0)
            @php
                $banner = $banners->first();
            @endphp
            <div class="position-relative overflow-hidden mb-5" style="height: 0; padding-bottom: 56.25%;"> <!-- 16:9 Aspect Ratio -->
                <img 
                    src="{{ asset('storage/' . $banner->photo) }}" 
                    alt="{{ $banner->title ?? 'Banner' }}"
                    class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                    loading="lazy"
                >
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                    style="background: rgba(0, 0, 0, 0.5);">
                    <div class="container text-center text-white px-3">
                        <h1 class="display-4 fw-bold ">Taklukan Samudera</h1>
                        <h1 class="display-4 fw-bold ">Persama Kami</h1>
                        <p class="lead mb-4">Aplikasi modern berbasis Laravel 10 dengan Bootstrap 5</p>
                        <a href="#" class="btn btn-primary btn-lg">
                            <i class="bi bi-arrow-right-circle me-2"></i>Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        @else
            <!-- Fallback jika tidak ada banner -->
            <div class="hero-section bg-primary text-center text-white rounded mb-5 py-5">
                <div class="container">
                    <h1 class="display-4 fw-bold mb-4">Selamat Datang di {{ settings()['title'] ?? config('app.name') }}</h1>
                    <p class="lead mb-4">Aplikasi modern berbasis Laravel 10 dengan Bootstrap 5</p>
                    <a href="#" class="btn btn-light btn-lg text-primary">
                        <i class="bi bi-arrow-right-circle me-2"></i>Pelajari Lebih Lanjut
                    </a>
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
