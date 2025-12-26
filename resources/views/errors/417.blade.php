@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '417 - Ekspektasi Gagal | Komunitas Mancing Apri')

@section('error-icon', '🤔')
@section('error-code', '417')
@section('error-title', 'Hasil Tidak Sesuai Harapan')
@section('error-message', 'Server tidak dapat memenuhi ekspektasi yang ditentukan dalam request header.')

@section('error-buttons')
    <button onclick="history.back()" class="btn btn-fishing">
        <i class="fas fa-redo me-2"></i>Coba Lagi
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection
=======
@section('title', '417 - Expectation Failed')
@section('error-code', '417')
@section('error-title', 'Expectation Failed')
@section('error-message', 'Server tidak dapat memenuhi ekspektasi permintaan.')

@section('error-buttons')
<a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
