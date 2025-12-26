@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '444 - Koneksi Ditutup | Komunitas Mancing Apri')

@section('error-icon', '📴')
@section('error-code', '444')
@section('error-title', 'Koneksi Ikan Lepas')
@section('error-message', 'Koneksi ditutup oleh server tanpa mengirim response. Seperti ikan yang lepas tanpa jejak.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <button onclick="window.location.reload()" class="btn btn-outline-primary">
        <i class="fas fa-redo me-2"></i>Coba Lagi
    </button>
    <a href="{{ route('status.server') }}" class="btn btn-outline-secondary">
        <i class="fas fa-server me-2"></i>Status Server
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Periksa koneksi internet Anda</li>
        <li>Coba akses dari jaringan berbeda</li>
        <li>Nonaktifkan firewall/antivirus sementara</li>
        <li>Coba akses di waktu lain</li>
    </ul>
@endsection
=======
@section('title', '444 - Connection Closed')
@section('error-code', '444')
@section('error-title', 'Koneksi Ditutup')
@section('error-message', 'Koneksi ditutup tanpa respon dari server.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
