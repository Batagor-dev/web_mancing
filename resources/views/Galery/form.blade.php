@php
    $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard';

    // Untuk tombol cancel
    if (isset($galery_data)) {
        $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName(), $galery_data)
            ->where('title', '!=', $breadcrumb->title)
            ->last();
    } else {
        $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName())
            ->where('title', '!=', $breadcrumb->title)
            ->last();
    }
@endphp


@extends('layout.backend.main', [
    'title' => 'Galery | ' . config('app.name'),
    'sub_title' => $sub_title
])

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- Breadcrumb untuk create/edit --}}
    {{ isset($galery_data) 
        ? Breadcrumbs::render(Request::route()->getName(), $galery_data)
        : Breadcrumbs::render(Request::route()->getName()) 
    }}

    <div class="card mb-6">
        <form class="card-body" method="POST" action="{{ $action }}" enctype="multipart/form-data">
            @csrf
            @isset($galery_data)
                @method('PUT')
            @endisset


            {{-- Title --}}
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="title">Title</label>
                <div class="col-sm-9">
                    <input type="text"
                        id="title"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title', $galery_data->title ?? '') }}"
                        placeholder="Title">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            {{-- Time --}}
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="time">Time</label>
                <div class="col-sm-9">
                    <input type="date"
                        id="time"
                        name="time"
                        class="form-control @error('time') is-invalid @enderror"
                        value="{{ old('time', isset($galery_data->time) ? \Carbon\Carbon::parse($galery_data->time)->format('Y-m-d') : '') }}">
                    @error('time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            {{-- Photo --}}
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="photo">Photo</label>
                <div class="col-sm-9">

                    <input class="form-control @error('photo') is-invalid @enderror"
                           type="file"
                           id="photo"
                           name="photo"
                           accept="image/*">

                    @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    {{-- Preview photo saat edit --}}
                    @isset($galery_data->photo)
                        <img src="{{ asset('storage/' . $galery_data->photo) }}" class="mt-3" width="120">
                    @endisset
                </div>
            </div>


            {{-- Buttons --}}
            <div class="pt-6">
                <div class="row justify-content-end">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary me-4">Submit</button>

                        <button type="reset" class="btn btn-outline-secondary"
                                onclick="window.location.href='{{ $breadcrumb_parent->url }}'">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection