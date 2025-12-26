@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '503 - Layanan Tidak Tersedia | Komunitas Mancing Apri')

@section('error-icon', '🔧')
@section('error-code', '503')
@section('error-title', 'Spot Sedang Diperbaiki')
@section('error-message', 'Layanan sedang tidak tersedia karena maintenance atau overload.')

@section('error-buttons')
    <button onclick="window.location.reload()" class="btn btn-fishing">
        <i class="fas fa-sync-alt me-2"></i>Coba Lagi
    </button>
    <a href="{{ route('status.server') }}" class="btn btn-outline-primary">
        <i class="fas fa-server me-2"></i>Status Server
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-comments me-2"></i>Forum Sementara
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Server sedang maintenance rutin</li>
        <li>Perkiraan selesai: {{ now()->addHours(2)->format('H:i') }}</li>
        <li>Coba akses kembali nanti</li>
        <li>Follow social media untuk update</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Maintenance Schedule:</strong></p>
    <p class="mb-0">
        Setiap hari Selasa jam 02:00-04:00 WIB. 
        <a href="{{ route('schedule.maintenance') }}" class="text-decoration-none">Lihat jadwal lengkap</a>
    </p>
@endsection
=======
@section('title', '503 - Service Unavailable')

@section('error-code', '503')
@section('error-title', 'Layanan Tidak Tersedia')
@section('error-message', 'Server sedang dalam perawatan. Silakan coba lagi nanti.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
