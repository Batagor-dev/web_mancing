@extends('layout.errors.main')

@section('title', '501 - Belum Diimplementasikan | Komunitas Mancing Apri')

@section('error-icon', '🔨')
@section('error-code', '501')
@section('error-title', 'Fitur Masih Dibangun')
@section('error-message', 'Fitur yang diminta belum diimplementasikan di server. Sedang dalam pengembangan.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('roadmap') }}" class="btn btn-outline-primary">
        <i class="fas fa-road me-2"></i>Roadmap Fitur
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-lightbulb me-2"></i>Usulkan Fitur
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Fitur sedang dalam pengembangan</li>
        <li>Cek roadmap untuk update progress</li>
        <li>Gunakan fitur yang sudah tersedia</li>
        <li>Berikan saran di forum diskusi</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Coming Soon:</strong></p>
    <p class="mb-0">
        Fitur ini rencana rilis pada 
        <strong>Q{{ date('Q', strtotime('+1 month')) }} {{ date('Y', strtotime('+1 month')) }}</strong>
    </p>
@endsection