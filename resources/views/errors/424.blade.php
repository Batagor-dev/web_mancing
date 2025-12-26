@extends('layout.errors.main')

@section('title', '424 - Dependency Gagal | Komunitas Mancing Apri')

@section('error-icon', '🔄')
@section('error-code', '424')
@section('error-title', 'Ketergantungan Gagal')
@section('error-message', 'Request gagal karena dependency/operasi sebelumnya gagal.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Mulai Ulang
    </a>
    <button onclick="history.back()" class="btn btn-outline-primary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Mulai proses dari awal</li>
        <li>Pastikan semua step sebelumnya berhasil</li>
        <li>Clear cache dan coba lagi</li>
        <li>Hubungi admin jika berulang</li>
    </ul>
@endsection