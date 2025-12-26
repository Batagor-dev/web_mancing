@extends('layout.errors.main')

@section('title', '410 - Konten Hilang | Komunitas Mancing Apri')

@section('error-icon', '🧹')
@section('error-code', '410')
@section('error-title', 'Spot Sudah Ditutup')
@section('error-message', 'Konten ini telah dihapus permanen. Seperti spot mancing yang sudah ditutup.')

@section('error-buttons')
    <a href="{{ route('spot.mancing') }}" class="btn btn-fishing">
        <i class="fas fa-map-marker-alt me-2"></i>Cari Spot Baru
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-primary">
        <i class="fas fa-newspaper me-2"></i>Konten Terbaru
    </a>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Konten telah dihapus secara permanen</li>
        <li>Cari konten serupa di daftar spot terbaru</li>
        <li>Bertanya di forum untuk rekomendasi spot baru</li>
        <li>Subscribe newsletter untuk update spot</li>
    </ul>
@endsection