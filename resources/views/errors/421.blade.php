@extends('layout.errors.main')

<<<<<<< HEAD
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
=======
@section('title', '421 - Misdirected Request')
@section('error-code', '421')
@section('error-title', 'Permintaan Salah Arah')
@section('error-message', 'Permintaan dikirim ke server yang salah.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
