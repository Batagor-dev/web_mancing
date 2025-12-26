@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '401 - Akses Ditolak | Komunitas Mancing Apri')

@section('error-icon', '🔐')
@section('error-code', '401')
@section('error-title', 'Akses Ditolak')
@section('error-message', 'Anda harus login terlebih dahulu untuk mengakses halaman ini.')

@section('error-buttons')
    <a href="{{ route('login') }}" class="btn btn-fishing">
        <i class="fas fa-sign-in-alt me-2"></i>Login Sekarang
    </a>
    <a href="{{ route('register') }}" class="btn btn-outline-primary">
        <i class="fas fa-user-plus me-2"></i>Daftar Member
    </a>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Pastikan Anda sudah login dengan akun Komunitas Mancing Apri</li>
        <li>Periksa kredensial login Anda</li>
        <li>Jika lupa password, gunakan fitur reset password</li>
        <li>Hubungi admin jika mengalami masalah login berulang</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Butuh bantuan login?</strong></p>
    <p class="mb-0">
        Hubungi Admin: 
        <a href="mailto:admin@mancingapri.com" class="text-decoration-none">admin@mancingapri.com</a> | 
        <a href="https://wa.me/6281234567890" class="text-decoration-none">0812-3456-7890</a>
    </p>
@endsection
=======
@section('title', '401 - Unauthorized')

@section('error-code', '401')
@section('error-title', 'Tidak Terautentikasi')
@section('error-message', 'Anda harus login terlebih dahulu untuk mengakses halaman ini.')

@section('error-buttons')
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
