@extends('layout.errors.main')

@section('title', '507 - Storage Tidak Cukup | Komunitas Mancing Apri')

@section('error-icon', '💾')
@section('error-code', '507')
@section('error-title', 'Kolam Penyimpanan Penuh')
@section('error-message', 'Server tidak memiliki storage yang cukup untuk menyelesaikan request.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('storage.manage') }}" class="btn btn-outline-primary">
        <i class="fas fa-trash-alt me-2"></i>Kelola Penyimpanan
    </a>
    <a href="{{ route('premium.features') }}" class="btn btn-outline-success">
        <i class="fas fa-expand-alt me-2"></i>Upgrade Storage
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Hapus file/foto yang tidak perlu</li>
        <li>Kompres file sebelum upload</li>
        <li>Upgrade ke paket dengan storage lebih besar</li>
        <li>Gunakan penyimpanan eksternal untuk file besar</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Storage Limit:</strong></p>
    <p class="mb-0">
        Free: 100MB | Premium: 10GB | Pro: Unlimited
    </p>
@endsection