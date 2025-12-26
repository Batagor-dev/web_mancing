@extends('layout.errors.main')

@section('title', '405 - Metode Tidak Diizinkan | Komunitas Mancing Apri')

@section('error-icon', '⚡')
@section('error-code', '405')
@section('error-title', 'Teknik Mancing Tidak Sesuai')
@section('error-message', 'Metode yang digunakan tidak diizinkan untuk aksi ini.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <button onclick="history.back()" class="btn btn-outline-primary">
        <i class="fas fa-redo me-2"></i>Coba Kembali
    </button>
    <a href="{{ route('help.center') }}" class="btn btn-outline-secondary">
        <i class="fas fa-life-ring me-2"></i>Bantuan
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Refresh halaman dan coba lagi</li>
        <li>Clear cache browser Anda</li>
        <li>Gunakan tombol/navigasi yang disediakan</li>
        <li>Jika menggunakan API, periksa dokumentasi</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Masih bermasalah?</strong></p>
    <p class="mb-0">
        Screenshoot error ini dan kirim ke 
        <a href="mailto:tech@mancingapri.com" class="text-decoration-none">tim teknis kami</a>
    </p>
@endsection