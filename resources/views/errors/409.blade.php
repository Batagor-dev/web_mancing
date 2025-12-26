@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '409 - Konflik Data | Komunitas Mancing Apri')

@section('error-icon', '⚔️')
@section('error-code', '409')
@section('error-title', 'Konflik Spot Mancing')
@section('error-message', 'Terjadi konflik dengan data yang sudah ada. Seperti dua pancingan di spot yang sama.')

@section('error-buttons')
    <button onclick="history.back()" class="btn btn-fishing">
        <i class="fas fa-edit me-2"></i>Edit Data
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Data yang Anda input mungkin sudah ada</li>
        <li>Periksa duplikasi spot/lokasi</li>
        <li>Coba dengan nama/data yang berbeda</li>
        <li>Hubungi admin untuk bantuan merge data</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Butuh bantuan data?</strong></p>
    <p class="mb-0">
        <a href="{{ route('forum.index') }}?category=data-issue" class="text-decoration-none">
            <i class="fas fa-database me-1"></i>Diskusikan di forum
        </a>
    </p>
@endsection
=======
@section('title', '409 - Conflict')

@section('error-code', '409')
@section('error-title', 'Terjadi Konflik')
@section('error-message', 'Permintaan tidak dapat diproses karena konflik data.')

@section('error-buttons')
    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
