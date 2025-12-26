@extends('layout.errors.main')

@section('title', '411 - Panjang Diperlukan | Komunitas Mancing Apri')

@section('error-icon', '📏')
@section('error-code', '411')
@section('error-title', 'Ukuran Ikan Tidak Jelas')
@section('error-message', 'Request membutuhkan header Content-Length. Seperti menceritakan ikan tangkapan tanpa menyebut ukurannya.')

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
        <li>Refresh halaman dan submit ulang</li>
        <li>Clear cache browser</li>
        <li>Nonaktifkan ekstensi yang mengubah request</li>
        <li>Coba dari browser/perangkat lain</li>
    </ul>
@endsection