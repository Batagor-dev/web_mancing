@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '451 - Tidak Tersedia Karena Alasan Hukum | Komunitas Mancing Apri')

@section('error-icon', '⚖️')
@section('error-code', '451')
@section('error-title', 'Diblokir Secara Hukum')
@section('error-message', 'Konten tidak tersedia karena alasan hukum. Referensi dari novel Fahrenheit 451.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-primary">
        <i class="fas fa-comments me-2"></i>Konten Lainnya
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Konten diblokir berdasarkan regulasi lokal</li>
        <li>Akses mungkin terbatas di wilayah Anda</li>
        <li>Cari konten serupa yang tersedia</li>
        <li>Hubungi admin untuk informasi lebih lanjut</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Legal Information:</strong></p>
    <p class="mb-0">
        Sesuai dengan UU ITE dan regulasi yang berlaku. 
        <a href="{{ route('legal.dmca') }}" class="text-decoration-none">DMCA Policy</a>
    </p>
@endsection
=======
@section('title', '451 - Unavailable For Legal Reasons')

@section('error-code', '451')
@section('error-title', 'Tidak Tersedia Karena Alasan Hukum')
@section('error-message', 'Konten ini tidak dapat diakses karena pembatasan hukum.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
