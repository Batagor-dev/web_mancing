@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '429 - Terlalu Banyak Request | Komunitas Mancing Apri')

@section('error-icon', '🐟')
@section('error-code', '429')
@section('error-title', 'Terlalu Banyak Casting')
@section('error-message', 'Anda melakukan terlalu banyak request dalam waktu singkat. Tunggu sebentar sebelum mencoba lagi.')

@section('error-buttons')
    <button onclick="window.location.reload()" class="btn btn-fishing">
        <i class="fas fa-clock me-2"></i>Tunggu & Coba Lagi
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('spot.mancing') }}" class="btn btn-outline-success">
        <i class="fas fa-map me-2"></i>Jelajahi Spot
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Tunggu {{ config('app.rate_limit_reset', 60) }} detik sebelum mencoba lagi</li>
        <li>Jangan spam refresh/klik tombol</li>
        <li>Gunakan fitur dengan lebih santai</li>
        <li>Limit: {{ config('app.rate_limit', 60) }} request per menit</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Butuh limit lebih tinggi?</strong></p>
    <p class="mb-0">
        Upgrade ke <a href="{{ route('premium.features') }}" class="text-decoration-none">member premium</a> 
        untuk rate limit yang lebih tinggi.
    </p>
@endsection
=======
@section('title', '429 - Too Many Requests')

@section('error-code', '429')
@section('error-title', 'Terlalu Banyak Permintaan')
@section('error-message', 'Anda mengirim terlalu banyak permintaan dalam waktu singkat.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
