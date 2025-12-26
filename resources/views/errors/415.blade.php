@extends('layout.errors.main')

@section('title', '415 - Format Tidak Didukung | Komunitas Mancing Apri')

@section('error-icon', '📎')
@section('error-code', '415')
@section('error-title', 'Umpan Tidak Cocok')
@section('error-message', 'Format media yang dikirim tidak didukung. Seperti umpan yang tidak disukai ikan.')

@section('error-buttons')
    <button onclick="history.back()" class="btn btn-fishing">
        <i class="fas fa-file-upload me-2"></i>Upload Ulang
    </button>
    <a href="{{ route('help.upload') }}" class="btn btn-outline-primary">
        <i class="fas fa-question-circle me-2"></i>Format yang Didukung
    </a>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li><strong>Gambar:</strong> JPG, PNG, GIF, WebP (max 5MB)</li>
        <li><strong>Video:</strong> MP4, AVI, MOV (max 100MB)</li>
        <li><strong>Dokumen:</strong> PDF, DOC, TXT (max 10MB)</li>
        <li>Konversi file ke format yang didukung</li>
    </ul>
@endsection