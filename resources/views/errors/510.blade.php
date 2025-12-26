@extends('layout.errors.main')

@section('title', '510 - Tidak Diperpanjang | Komunitas Mancing Apri')

@section('error-icon', '🔍')
@section('error-code', '510')
@section('error-title', 'Ekstensi Tidak Didukung')
@section('error-message', 'Server membutuhkan ekstensi policy untuk request ini.')

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
        <li>Request memerlukan konfigurasi khusus</li>
        <li>Hubungi admin untuk akses ekstensi</li>
        <li>Gunakan metode alternatif</li>
        <li>Cek dokumentasi API untuk detail</li>
    </ul>
@endsection