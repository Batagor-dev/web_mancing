@extends('layout.errors.main')

@section('title', '413 - Data Terlalu Besar | Komunitas Mancing Apri')

@section('error-icon', '🐋')
@section('error-code', '413')
@section('error-title', 'Ikan Tangkapan Terlalu Besar')
@section('error-message', 'Data yang dikirim melebihi batas ukuran. Seperti ikan paus yang terlalu besar untuk kolam.')

@section('error-buttons')
    <button onclick="history.back()" class="btn btn-fishing">
        <i class="fas fa-compress-alt me-2"></i>Kurangi Ukuran
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('help.upload') }}" class="btn btn-outline-secondary">
        <i class="fas fa-question-circle me-2"></i>Panduan Upload
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Ukuran maksimal file: Gambar 5MB, Video 100MB</li>
        <li>Kompres foto sebelum upload</li>
        <li>Gunakan format yang lebih ringan (JPEG bukan PNG)</li>
        <li>Split data besar menjadi beberapa bagian</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Butuh upload file besar?</strong></p>
    <p class="mb-0">
        <a href="{{ route('contact') }}?type=large-file" class="text-decoration-none">
            <i class="fas fa-cloud-upload-alt me-1"></i>Hubungi admin untuk opsi khusus
        </a>
    </p>
@endsection