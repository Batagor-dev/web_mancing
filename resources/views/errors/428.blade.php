@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '428 - Prasyarat Diperlukan | Komunitas Mancing Apri')

@section('error-icon', '✅')
@section('error-code', '428')
@section('error-title', 'Konfirmasi Diperlukan')
@section('error-message', 'Server membutuhkan prasyarat sebelum request dapat diproses.')

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
        <li>Refresh halaman dan coba submit ulang</li>
        <li>Pastikan semua persyaratan terpenuhi</li>
        <li>Cek konfirmasi email/verifikasi akun</li>
        <li>Hubungi admin untuk bantuan</li>
    </ul>
@endsection
=======
@section('title', '428 - Precondition Required')
@section('error-code', '428')
@section('error-title', 'Precondition Required')
@section('error-message', 'Permintaan membutuhkan prasyarat tambahan.')

@section('error-buttons')
<a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
