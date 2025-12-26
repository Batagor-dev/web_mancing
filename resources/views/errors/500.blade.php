@extends('layout.errors.main')

@section('title', '500 - Error Server | Komunitas Mancing Apri')

@section('error-icon', '🔥')
@section('error-code', '500')
@section('error-title', 'Kebocoran Perahu Server')
@section('error-message', 'Terjadi kesalahan internal server. Tim teknis kami telah diberitahu.')

@section('error-buttons')
    <button onclick="window.location.reload()" class="btn btn-fishing">
        <i class="fas fa-sync-alt me-2"></i>Coba Lagi
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('status.server') }}" class="btn btn-outline-secondary">
        <i class="fas fa-server me-2"></i>Status Server
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Refresh halaman setelah beberapa saat</li>
        <li>Clear cache dan cookies browser</li>
        <li>Coba akses dari perangkat berbeda</li>
        <li>Problem sedang diperbaiki tim teknis</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Report Error:</strong></p>
    <p class="mb-0">
        <a href="{{ route('contact') }}?type=server-error" class="text-decoration-none">
            <i class="fas fa-bug me-1"></i>Laporkan error ini ke tim teknis
        </a>
    </p>
@endsection