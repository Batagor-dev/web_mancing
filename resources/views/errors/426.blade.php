@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '426 - Perlu Upgrade | Komunitas Mancing Apri')

@section('error-icon', '⬆️')
@section('error-code', '426')
@section('error-title', 'Perlu Upgrade Peralatan')
@section('error-message', 'Client perlu upgrade ke protocol yang berbeda untuk melanjutkan.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('help.browser') }}" class="btn btn-outline-primary">
        <i class="fas fa-desktop me-2"></i>Panduan Browser
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Update browser ke versi terbaru</li>
        <li>Enable HTTPS/SSL di browser</li>
        <li>Coba akses dari perangkat berbeda</li>
        <li>Pastikan sistem operasi terupdate</li>
    </ul>
@endsection
=======
@section('title', '426 - Upgrade Required')
@section('error-code', '426')
@section('error-title', 'Upgrade Diperlukan')
@section('error-message', 'Silakan upgrade protokol untuk melanjutkan.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
