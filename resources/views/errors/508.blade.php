@extends('layout.errors.main')

@section('title', '508 - Loop Terdeteksi | Komunitas Mancing Apri')

@section('error-icon', '🌀')
@section('error-code', '508')
@section('error-title', 'Looping Terdeteksi')
@section('error-message', 'Server mendeteksi infinite loop saat memproses request.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <button onclick="window.location.reload()" class="btn btn-outline-primary">
        <i class="fas fa-redo me-2"></i>Coba Lagi
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Refresh halaman untuk memutus loop</li>
        <li>Clear cache dan cookies</li>
        <li>Coba akses dari URL langsung</li>
        <li>Tim teknis sedang diperbaiki bug ini</li>
    </ul>
@endsection

@section('error-contact')
    <p class="mb-2"><strong>Bug Report:</strong></p>
    <p class="mb-0">
        <a href="{{ route('contact') }}?type=loop-bug" class="text-decoration-none">
            <i class="fas fa-bug me-1"></i>Laporkan bug looping
        </a>
    </p>
@endsection