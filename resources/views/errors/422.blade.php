@extends('layout.errors.main')

@section('title', '422 - Data Tidak Valid | Komunitas Mancing Apri')

@section('error-icon', '📝')
@section('error-code', '422')
@section('error-title', 'Data Tidak Dapat Diproses')
@section('error-message', 'Data yang dikirim tidak valid atau tidak lengkap untuk diproses.')

@section('error-buttons')
    <button onclick="history.back()" class="btn btn-fishing">
        <i class="fas fa-edit me-2"></i>Perbaiki Data
    </button>
    <a href="{{ route('help.forms') }}" class="btn btn-outline-primary">
        <i class="fas fa-question-circle me-2"></i>Panduan Isi Form
    </a>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Periksa semua field yang wajib diisi</li>
        <li>Pastikan format data sesuai (email, tanggal, dll)</li>
        <li>Cek validasi khusus untuk setiap field</li>
        <li>Hindari karakter khusus yang tidak diperbolehkan</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Error detail:</strong></p>
    <p class="mb-0">
        @if(session('errors'))
            @foreach(session('errors')->all() as $error)
                <div class="text-danger small">• {{ $error }}</div>
            @endforeach
        @else
            <span class="text-muted">Tidak ada detail error tersedia</span>
        @endif
    </p>
@endsection