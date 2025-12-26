@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '403 - Akses Dilarang | Komunitas Mancing Apri')

@section('error-icon', '🚫')
@section('error-code', '403')
@section('error-title', 'Akses Dilarang')
@section('error-message', 'Anda tidak memiliki izin untuk mengakses halaman atau fitur ini.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Kembali ke Beranda
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-primary">
        <i class="fas fa-comments me-2"></i>Forum Diskusi
    </a>
    <button onclick="history.back()" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Halaman ini hanya untuk member dengan level tertentu</li>
        <li>Fitur mungkin hanya untuk member premium atau admin</li>
        <li>Pastikan Anda sudah verifikasi akun</li>
        <li>Hubungi admin untuk request akses khusus</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Ingin akses lebih luas?</strong></p>
    <p class="mb-0">
        Upgrade ke <a href="{{ route('premium.features') }}" class="text-decoration-none">member premium</a> 
        atau hubungi admin untuk izin khusus.
    </p>
@endsection
=======
@section('title', '403 - Forbidden')

@section('error-code', '403')
@section('error-title', 'Akses Ditolak')
@section('error-message', 'Anda tidak memiliki izin untuk mengakses halaman ini.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
