@extends('layout.errors.main')

<<<<<<< HEAD
@section('title', '423 - Terkunci | Komunitas Mancing Apri')

@section('error-icon', '🔒')
@section('error-code', '423')
@section('error-title', 'Resource Terkunci')
@section('error-message', 'Resource yang diakses sedang terkunci atau dalam proses edit oleh pengguna lain.')

@section('error-buttons')
    <button onclick="window.location.reload()" class="btn btn-fishing">
        <i class="fas fa-sync-alt me-2"></i>Cek Kembali
    </button>
    <a href="{{ url('/') }}" class="btn btn-outline-primary">
        <i class="fas fa-home me-2"></i>Beranda
    </a>
    <a href="{{ route('forum.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-comments me-2"></i>Forum
    </a>
@endsection

@section('error-suggestions')
    <ul class="mb-0">
        <li>Tunggu beberapa menit dan coba lagi</li>
        <li>Resource mungkin sedang diedit oleh admin/moderator</li>
        <li>Coba akses resource serupa lainnya</li>
        <li>Hubungi admin jika terkunci terlalu lama</li>
    </ul>
@endsection
=======
@section('title', '423 - Locked')
@section('error-code', '423')
@section('error-title', 'Terkunci')
@section('error-message', 'Resource sedang dikunci dan tidak dapat diakses.')

@section('error-buttons')
<a href="{{ url('/') }}" class="btn btn-primary">Beranda</a>
@endsection
>>>>>>> 593f10c745a523260aade8241ab7390e7dec68e9
