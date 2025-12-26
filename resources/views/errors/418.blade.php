@extends('layout.errors.main')

@section('title', '418 - Saya Teapot | Komunitas Mancing Apri')

@section('error-icon', '🫖')
@section('error-code', '418')
@section('error-title', 'Saya Teapot, Bukan Server Kopi')
@section('error-message', 'Server menolak karena ini adalah teapot. (Easter egg HTTP dari April Fools)')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-primary">
        <i class="fas fa-mug-hot me-2"></i>Forum Ngopi
    </a>
    <a href="https://http.cat/418" target="_blank" class="btn btn-outline-secondary">
        <i class="fas fa-cat me-2"></i>HTTP Cats
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Ini adalah error humor dari RFC 2324</li>
        <li>Server menolak karena konfigurasi khusus</li>
        <li>Coba akses lagi nanti atau dari URL berbeda</li>
        <li>Nikmati humor programming ini!</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Fun Fact:</strong></p>
    <p class="mb-0">
        Error 418 adalah April Fools joke dari tahun 1998 yang menjadi bagian resmi HTTP.
    </p>
@endsection