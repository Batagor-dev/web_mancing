@extends('layout.errors.main')

@section('title', '431 - Header Terlalu Besar | Komunitas Mancing Apri')

@section('error-icon', '📋')
@section('error-code', '431')
@section('error-title', 'Header Permintaan Terlalu Besar')
@section('error-message', 'Header request terlalu besar untuk diproses server.')

@section('error-buttons')
    <a href="{{ url('/') }}" class="btn btn-fishing">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <button onclick="window.location.reload()" class="btn btn-outline-primary">
        <i class="fas fa-sync-alt me-2"></i>Refresh
    </button>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Clear cookies dan cache browser</li>
        <li>Coba mode incognito/private</li>
        <li>Kurangi jumlah cookies yang disimpan</li>
        <li>Coba dari browser/perangkat lain</li>
    </ul>
@endsection