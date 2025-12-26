@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '414 - URL Terlalu Panjang | Komunitas Mancing Apri')

@section('error-icon', '📜')
@section('error-code', '414')
@section('error-title', 'Joran Terlalu Panjang')
@section('error-message', 'URL yang diminta terlalu panjang untuk diproses.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('search') }}" class="btn btn-outline-primary">
        <i class="fas fa-search me-2"></i>Cari Konten
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Gunakan fitur pencarian website</li>
        <li>Bookmark halaman yang sering diakses</li>
        <li>Gunakan URL yang lebih pendek</li>
        <li>Hindari copy-paste URL panjang</li>
    </ul>
@endsection
=======
@section('title', '414 - URI Too Long')
@section('error-code', '414')
@section('error-title', 'URI Terlalu Panjang')
@section('error-message', 'Alamat URL yang diminta terlalu panjang untuk diproses server.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
