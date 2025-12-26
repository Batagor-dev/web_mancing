@extends('layout.errors.main')

@section('title', '423 - Terkunci | Komunitas Mancing Apri')

@section('error-icon', '🔒')
@section('error-code', '423')
@section('error-title', 'Resource Terkunci')
@section('error-message', 'Resource yang diakses sedang terkunci atau dalam proses edit oleh pengguna lain.')

@section('error-buttons')
    <button onclick="window.location.reload()" class="btn btn-fishing">
        <i class="fas fa-sync-alt me-2"></i>Cek Kembali
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-comments me-2"></i>Forum
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Tunggu beberapa menit dan coba lagi</li>
        <li>Resource mungkin sedang diedit oleh admin/moderator</li>
        <li>Coba akses resource serupa lainnya</li>
        <li>Hubungi admin jika terkunci terlalu lama</li>
    </ul>
@endsection