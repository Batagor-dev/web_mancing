@extends('layout.errors.main')

@section('title', '408 - Waktu Habis | Komunitas Mancing Apri')

@section('error-icon', '⏱️')
@section('error-code', '408')
@section('error-title', 'Waktu Mancing Habis')
@section('error-message', 'Koneksi timeout. Seperti ikan yang lepas, koneksi terputus terlalu lama.')

@section('error-buttons')
    <button onclick="window.location.reload()" class="btn btn-fishing">
        <i class="fas fa-sync-alt me-2"></i>Coba Lagi
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('spot.mancing') }}" class="btn btn-outline-success">
        <i class="fas fa-map me-2"></i>Spot Mancing
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Periksa koneksi internet Anda</li>
        <li>Refresh halaman dan coba kembali</li>
        <li>Hindari jaringan yang sibuk/lemot</li>
        <li>Coba akses di waktu yang berbeda</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Koneksi bermasalah?</strong></p>
    <p class="mb-0">
        Cek status server: 
        <a href="{{ route('status.server') }}" class="text-decoration-none">
            <i class="fas fa-server me-1"></i>Status Server
        </a>
    </p>
@endsection