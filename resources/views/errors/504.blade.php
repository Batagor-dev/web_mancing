@extends('layout.errors.main')

@section('title', '504 - Gateway Timeout | Komunitas Mancing Apri')

@section('error-icon', '⏳')
@section('error-code', '504')
@section('error-title', 'Gateway Terlalu Lama Merespon')
@section('error-message', 'Server gateway tidak menerima response tepat waktu dari upstream server.')

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
        <li>Koneksi server sedang lambat</li>
        <li>Coba akses di waktu yang berbeda</li>
        <li>Periksa koneksi internet Anda</li>
        <li>Tim sedang memantau performa server</li>
    </ul>
@endsection