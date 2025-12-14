@extends('layout.public.main')


@push('styles')
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://via.placeholder.com/1920x600');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        
        .feature-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-center rounded mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Selamat Datang di {{ config('app.name') }}</h1>
            <p class="lead mb-4">Aplikasi modern berbasis Laravel 10 dengan Bootstrap 5</p>
            <a href="#" class="btn btn-primary btn-lg">
                <i class="bi bi-arrow-right-circle me-2"></i>Pelajari Lebih Lanjut
            </a>
        </div>
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

@push('scripts')
    <script>
        // Custom JavaScript untuk halaman ini
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Home page loaded');
            
            // Animasi untuk cards
            const cards = document.querySelectorAll('.feature-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 8px 15px rgba(0,0,0,0.2)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 4px 6px rgba(0,0,0,0.1)';
                });
            });
        });
    </script>
@endpush