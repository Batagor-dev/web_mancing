@extends('layout.errors.main')

<<<<<<< HEAD
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
=======
@section('title', '502 - Bad Gateway')

@section('error-code', '502')
@section('error-title', 'Gateway Bermasalah')
@section('error-message', 'Server menerima respon yang tidak valid.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
