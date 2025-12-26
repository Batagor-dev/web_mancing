@extends('layout.errors.main')

@section('title', '502 - Gateway Bermasalah | Komunitas Mancing Apri')

@section('error-icon', '🚧')
@section('error-code', '502')
@section('error-title', 'Jembatan Server Rusak')
@section('error-message', 'Server gateway menerima response tidak valid dari upstream server.')

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
        <li>Refresh halaman setelah beberapa menit</li>
        <li>Clear DNS cache Anda</li>
        <li>Coba akses dengan VPN dimatikan</li>
        <li>Tim sedang memperbaiki koneksi server</li>
    </ul>
@endsection