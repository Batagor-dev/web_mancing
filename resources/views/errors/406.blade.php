@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '406 - Format Tidak Diterima | Komunitas Mancing Apri')

@section('error-icon', '📱')
@section('error-code', '406')
@section('error-title', 'Format Tidak Didukung')
@section('error-message', 'Browser atau perangkat Anda tidak mendukung format yang diminta.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-primary">
        <i class="fas fa-comments me-2"></i>Forum
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Update browser ke versi terbaru</li>
        <li>Coba akses dari perangkat lain</li>
        <li>Nonaktifkan ekstensi browser yang mungkin mengganggu</li>
        <li>Coba mode incognito/private browsing</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Browser yang direkomendasikan:</strong></p>
    <p class="mb-0">
        Chrome ≥ v80, Firefox ≥ v75, Safari ≥ v13, Edge ≥ v80
    </p>
@endsection
=======
@section('title', '406 - Not Acceptable')
@section('error-code', '406')
@section('error-title', 'Tidak Dapat Diterima')
@section('error-message', 'Server tidak dapat memproses permintaan Anda.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
