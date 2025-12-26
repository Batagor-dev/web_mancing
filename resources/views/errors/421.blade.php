@extends('layout.errors.main')

@section('title', '421 - Request Tersesat | Komunitas Mancing Apri')

@section('error-icon', '🧭')
@section('error-code', '421')
@section('error-title', 'Request Tersesat')
@section('error-message', 'Request dikirim ke server yang tidak dapat menghasilkan response.')

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
        <li>Clear DNS cache Anda</li>
        <li>Coba akses dengan VPN dimatikan</li>
        <li>Periksa pengaturan jaringan</li>
        <li>Coba dari jaringan berbeda</li>
    </ul>
@endsection