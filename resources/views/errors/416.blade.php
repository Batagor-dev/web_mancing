@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '416 - Range Tidak Valid | Komunitas Mancing Apri')

@section('error-icon', '🎯')
@section('error-code', '416')
@section('error-title', 'Jangkauan Tidak Tepat')
@section('error-message', 'Range yang diminta tidak valid untuk resource yang tersedia.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <button onclick="window.location.reload()" class="btn btn-outline-primary">
        <i class="fas fa-sync-alt me-2"></i>Refresh
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Refresh halaman sepenuhnya</li>
        <li>Clear cache dan cookies</li>
        <li>Coba akses dari awal</li>
        <li>Hubungi admin jika masalah berlanjut</li>
    </ul>
@endsection
=======
@section('title', '416 - Range Not Satisfiable')
@section('error-code', '416')
@section('error-title', 'Range Tidak Valid')
@section('error-message', 'Permintaan range data tidak dapat dipenuhi.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
