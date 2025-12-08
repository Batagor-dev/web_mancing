@php
    $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard';

    if (isset($profilkomunitas_data)) {
        $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName(), $profilkomunitas_data)
            ->where('title', '!=', $breadcrumb->title)
            ->last();
    } else {
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

        {{ isset($profilkomunitas_data) 
            ? Breadcrumbs::render(Request::route()->getName(), $profilkomunitas_data) 
            : Breadcrumbs::render(Request::route()->getName()) 
        }}

        <div class="card mb-6">
            <form class="card-body" method="POST" 
                  action="{{ $action }}" 
                  enctype="multipart/form-data">

                @isset($profilkomunitas_data) @method('PUT') @endisset
                @csrf

                {{-- Title --}}
                <div class="row mb-4">
                    <label class="col-sm-3 col-form-label" for="title">Title</label>
                    <div class="col-sm-9">
                        <input type="text"
                            id="title"
                            name="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $profilkomunitas_data->title ?? '') }}"
                            placeholder="Nama Komunitas"/>
                        @error('title')
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
                            rows="4"
                            class="form-control @error('deskripsi') is-invalid @enderror"
                            placeholder="Deskripsi komunitas...">{{ old('deskripsi', $profilkomunitas_data->deskripsi ?? '') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Photo --}}
                <div class="row mb-4">
                    <label class="col-sm-3 col-form-label" for="photo">Photo</label>
                    <div class="col-sm-9">

                        <input type="file"
                            id="photo"
                            name="photo"
                            class="form-control @error('photo') is-invalid @enderror"/>

                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        {{-- Preview saat edit --}}
                        @isset($profilkomunitas_data)
                            @if($profilkomunitas_data->photo)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $profilkomunitas_data->photo) }}"
                                         alt="Preview"
                                         class="img-thumbnail"
                                         width="120">
                                </div>
                            @endif
                        @endisset
                    </div>
                </div>

                {{-- Submit / Cancel --}}
                <div class="pt-6">
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary me-4">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary"
                                onclick="window.location.href='{{ $breadcrumb_parent->url }}'">Cancel</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
