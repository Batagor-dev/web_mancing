@extends('layout.errors.main')

@section('title', '425 - Terlalu Cepat | Komunitas Mancing Apri')

@section('error-icon', '🚦')
@section('error-code', '425')
@section('error-title', 'Terlalu Cepat Memancing')
@section('error-message', 'Server menolak request karena mungkin mengalami replay attack.')

@section('error-buttons')
    <button onclick="window.location.reload()" class="btn btn-fishing">
        <i class="fas fa-sync-alt me-2"></i>Coba Lagi
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Tunggu beberapa detik dan coba kembali</li>
        <li>Jangan spam refresh/klik tombol</li>
        <li>Clear cache browser</li>
        <li>Nonaktifkan VPN/proxy jika ada</li>
    </ul>
@endsection