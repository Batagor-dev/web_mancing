<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="{{ asset('forntend/css/nav.css') }}">
    <!-- Custom CSS -->
    @stack('styles')
</head>
<body>
    <!-- Header -->
    @include('layout.public.header')
    
    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('layout.public.footer')
    
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('forntend/js/nav.js')}}"></script>
    <!-- Custom Scripts -->
    @stack('scripts')
</body>
</html>