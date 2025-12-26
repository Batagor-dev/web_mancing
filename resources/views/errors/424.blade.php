@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '424 - Dependency Gagal | Komunitas Mancing Apri')

@section('error-icon', '🔄')
@section('error-code', '424')
@section('error-title', 'Ketergantungan Gagal')
@section('error-message', 'Request gagal karena dependency/operasi sebelumnya gagal.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Mulai Ulang
    </a>
    <button onclick="history.back()" class="btn btn-outline-primary">
        <i class="fas fa-arrow-left me-2"></i>Kembali
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Mulai proses dari awal</li>
        <li>Pastikan semua step sebelumnya berhasil</li>
        <li>Clear cache dan coba lagi</li>
        <li>Hubungi admin jika berulang</li>
    </ul>
@endsection
=======
@section('title', '424 - Failed Dependency')
@section('error-code', '424')
@section('error-title', 'Dependensi Gagal')
@section('error-message', 'Permintaan gagal karena dependensi lain bermasalah.')

@section('error-buttons')
<a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
