@php
    $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard';

    if (isset($stuktural_data)) {
        $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName(), $stuktural_data)
            ->where('title', '!=', $breadcrumb->title)
            ->last();
    } else {
        $breadcrumb_parent = Breadcrumbs::generate(Request::route()->getName())
            ->where('title', '!=', $breadcrumb->title)
            ->last();
    }
@endphp

@extends('layout.backend.main', [
    'title' => 'Dashboard | ' . config('app.name'),
    'sub_title' => $sub_title,
])

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    {{ isset($stuktural_data) ? Breadcrumbs::render(Request::route()->getName(), $stuktural_data) : Breadcrumbs::render(Request::route()->getName()) }}

    <div class="card mb-6">
        <form class="card-body" method="POST" action="{{ $action }}" enctype="multipart/form-data">
            @isset($stuktural_data) @method('PUT') @endisset
            @csrf

            {{-- UNIT --}}
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="unit">Unit</label>
                <div class="col-sm-9">
                    <input type="text" id="unit" name="unit"
                           value="{{ old('unit', $stuktural_data->unit ?? '') }}"
                           class="form-control @error('unit') is-invalid @enderror">
                    @error('unit') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            {{-- JABATAN --}}
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="jabatan">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" id="jabatan" name="jabatan"
                           value="{{ old('jabatan', $stuktural_data->jabatan ?? '') }}"
                           class="form-control @error('jabatan') is-invalid @enderror">
                    @error('jabatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            {{-- NAME --}}
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label" for="name">Nama</label>
                <div class="col-sm-9">
                    <input type="text" id="name" name="name"
                           value="{{ old('name', $stuktural_data->name ?? '') }}"
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            {{-- FOTO + CROPPER --}}
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-9">

                    @if(isset($stuktural_data) && $stuktural_data->photo)
                        <div class="mb-3 old-photo-wrapper">
                            <img src="{{ asset('storage/uploads/stuktural/' . $stuktural_data->photo) }}"
                                class="rounded old-photo-preview"
                                style="width: 80px; height: 80px; object-fit: cover;">
                        </div>
                    @endif

                    {{-- Preview hasil crop --}}
                    <div class="mb-3">
                        <img id="preview-cropped" class="rounded d-none"
                             style="width: 120px; height: 120px; object-fit: cover;">
                    </div>

                    {{-- Input file --}}
                    <input type="file" id="photo-input" accept="image/*"
                        class="form-control @error('photo') is-invalid @enderror">
                    @error('photo') <div class="invalid-feedback">{{ $message }}</div> @enderror

                    {{-- Hidden hasil crop --}}
                    <input type="hidden" name="photo" id="photo-cropped-hidden">

                    <small class="text-muted">Format: JPG, JPEG, PNG, WEBP • Max 2MB</small>
                </div>
            </div>

            {{-- SUBMIT --}}
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

{{-- Modal Cropper --}}
<div class="modal fade" id="cropperModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Crop Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <img id="cropper-image" style="max-width: 100%;">
      </div>

      <div class="modal-footer">
        <button type="button" id="crop-btn" class="btn btn-primary">Crop & Gunakan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>

    </div>
  </div>
</div>

@endsection

@push('scripts')
    <script>
        let cropper;
        const input = document.getElementById("photo-input");
        const modal = new bootstrap.Modal(document.getElementById("cropperModal"));
        const cropperImage = document.getElementById("cropper-image");
        const preview = document.getElementById("preview-cropped");
        const hidden = document.getElementById("photo-cropped-hidden");

        input.addEventListener("change", function(e) {
            // hilangkan preview foto lama
            document.querySelector('.old-photo-wrapper')?.classList.add('d-none');

            const file = e.target.files[0];
            if (!file) return;

            const url = URL.createObjectURL(file);
            cropperImage.src = url;

            modal.show();

            modal._element.addEventListener('shown.bs.modal', function () {
                cropper = new Cropper(cropperImage, {
                    aspectRatio: 1,
                    viewMode: 1,
                    dragMode: 'move',
                });
            }, { once: true });
        });

        document.getElementById("crop-btn").addEventListener("click", function () {
            const canvas = cropper.getCroppedCanvas({
                width: 500,
                height: 500,
            });

            const base64 = canvas.toDataURL("image/jpeg", 0.9);

            preview.src = base64;
            preview.classList.remove("d-none");

            hidden.value = base64;

            modal.hide();

            cropper.destroy();
        });
    </script>
@endpush