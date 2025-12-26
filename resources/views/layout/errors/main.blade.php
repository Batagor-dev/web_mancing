<!DOCTYPE html>
<<<<<<< HEAD
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ settings()['title'] ?? config('app.name') }}</title>
    <meta name="author" content="{{ settings()['author'] ?? '' }}">
    <meta name="description" content="{{ settings()['description'] ?? '' }}">


    <!-- Favicon -->
    <link rel="icon" type="image/png"
      href="{{ settings()['favicon'] ? asset('storage/' . settings()['favicon']) : asset('images/no-image.png') }}">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('forntend/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('forntend/css/nav.css') }}">

    <!-- Animate.css untuk animasi dasar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS Library untuk Animasi pada Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Custom CSS -->
    @stack('styles')
</head>
<body>
    <!-- Header -->
    @include('layout.public.header')
    
    <!-- Main Content -->
    <main class="bg-light">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('layout.public.footer')
    
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('forntend/js/nav.js')}}"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- GSAP (opsional untuk animasi kompleks) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- Input mask untuk form -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>

    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800, // durasi animasi
            offset: 100,   // offset trigger
            once: true     // animasi hanya sekali
        });

        // Inisialisasi Input Mask untuk telepon di form kontak
        document.addEventListener('DOMContentLoaded', function() {
            var phoneInput = document.getElementById('phoneInput'); // Anda perlu menambahkan ID di input
            if(phoneInput) {
                new Cleave('#phoneInput', {
                    numericOnly: true,
                    blocks: [4, 4, 8],
                    delimiter: ' '
                });
            }
        });
    </script>
    <!-- Custom Scripts -->
    @stack('scripts')
</body>
</html>
=======
<html lang="id" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Error')</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            margin: 0;
        }

        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .error-icon {
            font-size: 4rem;
            margin-bottom: 10px;
        }

        .error-code {
            font-size: 6rem;
            font-weight: 800;
            color: #0d6efd;
            line-height: 1;
        }

        .error-title {
            font-size: 2rem;
            font-weight: 700;
            margin-top: 10px;
        }

        .error-message {
            color: #6c757d;
            max-width: 500px;
            margin: 15px auto 30px;
        }

        .error-actions a {
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
        }

        @media (max-width: 576px) {
            .error-code {
                font-size: 4.5rem;
            }
            .error-title {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>

<div class="error-page">
    <div>

        <div class="error-code">
            @yield('error-code', '404')
        </div>

        <div class="error-title">
            @yield('error-title', 'Terjadi Kesalahan')
        </div>

        <p class="error-message">
            @yield('error-message', 'Halaman yang Anda cari tidak dapat ditemukan.')
        </p>

        <div class="error-actions">
            @yield('error-buttons')
        </div>
    </div>
</div>

</body>
</html>
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
