@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '506 - Variant Juga Negosiasi | Komunitas Mancing Apri')

@section('error-icon', '🤝')
@section('error-code', '506')
@section('error-title', 'Negosiasi Variant Gagal')
@section('error-message', 'Terjadi kesalahan dalam negosiasi konten yang diminta.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <button onclick="history.back()" class="btn btn-outline-primary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Refresh halaman dan coba lagi</li>
        <li>Clear cache dan cookies browser</li>
        <li>Coba request dengan parameter berbeda</li>
        <li>Hubungi admin jika berlanjut</li>
    </ul>
@endsection
=======
@section('title', '506 - Variant Also Negotiates')
@section('error-code', '506')
@section('error-title', 'Variant Error')
@section('error-message', 'Konfigurasi server tidak valid.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
