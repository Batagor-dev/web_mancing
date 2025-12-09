@php
    $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard';

    if (isset($profil_data)) {
        // dd('tes');
        $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName(), $profil_data)
            ->where('title', '!=', $breadcrumb->title)
            ->last();
    } else {
        // dd('tes2');
        $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName())
            ->where('title', '!=', $breadcrumb->title)
            ->last();
    }
@endphp

@extends('layout.backend.main', [
    'title'     => 'Dashboard | ' . config('app.name'),
    'sub_title' => $sub_title,
])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{ isset($profil_data) ? Breadcrumbs::render(Request::route()->getName(), $profil_data) : Breadcrumbs::render(Request::route()->getName()) }}
        <div class="card mb-6">
            <form class="card-body" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                @isset($profil_data) @method('PUT') @endisset
                @csrf
                {{-- Title --}}
                <div class="row mb-4">
                    <label class="col-sm-3 col-form-label" for="judul">judul</label>
                    <div class="col-sm-9">
                        <input type="text"
                            id="judul"
                            name="judul"
                            class="form-control @error('judul') is-invalid @enderror"
                            value="{{ old('judul', $profil_data->judul ?? '') }}"
                            placeholder="judul">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Deskripsi --}}
                <div class="row mb-4">
                    <label class="col-sm-3 col-form-label" for="deskripsi">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            rows="5"
                            class="form-control @error('deskripsi') is-invalid @enderror"
                            placeholder="Masukkan deskripsi...">{{ old('deskripsi', $profil_data->deskripsi ?? '') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Photo --}}
                <div class="row mb-4">
                    <label class="col-sm-3 col-form-label" for="photo">Photo</label>
                    <div class="col-sm-9">
                        <input
                            type="file"
                            id="photo"
                            name="photo"
                            accept="image/*"
                            class="form-control @error('photo') is-invalid @enderror">

                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        {{-- Preview foto lama --}}
                    @if(isset($profil_data) && $profil_data->photo)
                    <div class="mt-3 old-photo-wrapper">
                        <img src="{{ asset('storage/' . $profil_data->photo) }}"
                            class="rounded old-photo-preview"
                            style="width: 120px; height: 120px; object-fit: cover;">
                    </div>
                @endif


                        {{-- Preview foto baru --}}
                        <div class="mt-3 d-none" id="new-photo-preview">
                            <img src="" class="rounded" style="width: 120px; height: 120px; object-fit: cover;">
                        </div>
                    </div>
                </div>



                <!-- Submit / Cancel -->
                <div class="pt-6">
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary me-4">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" onclick="window.location.href='{{ $breadcrumb_parent->url }}'">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- JS preview foto --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('photo');
            const preview = document.getElementById('new-photo-preview').querySelector('img');
            const wrapper = document.getElementById('new-photo-preview');

            input.addEventListener('change', e => {
                document.querySelector('.old-photo-wrapper')?.classList.add('d-none');

                const file = e.target.files[0];
                if (!file) return;

                preview.src = URL.createObjectURL(file);
                wrapper.classList.remove('d-none');
            });
        });
    </script>
@endpush