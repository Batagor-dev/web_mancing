@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '412 - Prasyarat Gagal | Komunitas Mancing Apri')

@section('error-icon', '🔍')
@section('error-code', '412')
@section('error-title', 'Syarat Tidak Terpenuhi')
@section('error-message', 'Prasyarat yang ditentukan dalam request header tidak terpenuhi.')

@section('error-buttons')
    <button onclick="history.back()" class="btn btn-fishing">
        <i class="fas fa-redo me-2"></i>Coba Lagi
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Pastikan semua persyaratan terpenuhi</li>
        <li>Refresh halaman dan coba kembali</li>
        <li>Periksa kondisi akses/perizinan</li>
        <li>Hubungi admin untuk klarifikasi syarat</li>
    </ul>
@endsection
=======
@section('title', '412 - Precondition Failed')
@section('error-code', '412')
@section('error-title', 'Precondition Failed')
@section('error-message', 'Kondisi prasyarat tidak terpenuhi.')

@section('error-buttons')
<a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
