@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '511 - Autentikasi Jaringan Diperlukan | Komunitas Mancing Apri')

@section('error-icon', '🌐')
@section('error-code', '511')
@section('error-title', 'Perlu Login Jaringan')
@section('error-message', 'Anda perlu autentikasi jaringan sebelum mengakses internet.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <button onclick="window.location.reload()" class="btn btn-outline-primary">
        <i class="fas fa-sync-alt me-2"></i>Coba Lagi
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Login ke jaringan WiFi publik/hotel</li>
        <li>Buka captive portal jaringan Anda</li>
        <li>Hubungi penyedia jaringan</li>
        <li>Coba dengan jaringan berbeda</li>
    </ul>
@endsection
=======
@section('title', '511 - Network Authentication Required')

@section('error-code', '511')
@section('error-title', 'Autentikasi Jaringan Diperlukan')
@section('error-message', 'Anda perlu autentikasi jaringan untuk mengakses halaman ini.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
