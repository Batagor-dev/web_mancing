@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '402 - Pembayaran Diperlukan | Komunitas Mancing Apri')

@section('error-icon', '💰')
@section('error-code', '402')
@section('error-title', 'Pembayaran Diperlukan')
@section('error-message', 'Fitur ini memerlukan pembayaran atau langganan premium.')

@section('error-buttons')
    <a href="{{ route('premium.features') }}" class="btn btn-fishing">
        <i class="fas fa-crown me-2"></i>Lihat Fitur Premium
    </a>
    <a href="{{ route('payment.plans') }}" class="btn btn-outline-success">
        <i class="fas fa-credit-card me-2"></i>Pilih Paket
    </a>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Upgrade ke akun premium untuk akses fitur lengkap</li>
        <li>Nikmati benefit premium: spot rahasia, prediksi cuaca, dan konten eksklusif</li>
        <li>Pembayaran aman melalui berbagai metode</li>
        <li>Garansi uang kembali 30 hari</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Info Premium Membership:</strong></p>
    <p class="mb-0">
        Harga mulai dari Rp 50.000/bulan. 
        <a href="{{ route('premium.info') }}" class="text-decoration-none">Lihat detail paket</a>
    </p>
@endsection
=======
@section('title', '402 - Payment Required')

@section('error-code', '402')
@section('error-title', 'Pembayaran Diperlukan')
@section('error-message', 'Akses ke halaman ini memerlukan pembayaran.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
