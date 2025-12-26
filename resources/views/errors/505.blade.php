@extends('layout.errors.main')

@section('title', '505 - Versi HTTP Tidak Didukung | Komunitas Mancing Apri')

@section('error-icon', '📡')
@section('error-code', '505')
@section('error-title', 'Versi Protocol Tidak Didukung')
@section('error-message', 'Versi HTTP yang digunakan tidak didukung oleh server.')

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
        <li>Server mendukung HTTP/1.1 dan HTTP/2</li>
        <li>Coba akses dari perangkat berbeda</li>
        <li>Disable experimental protocol features</li>
    </ul>
@endsection