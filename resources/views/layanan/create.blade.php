@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Tambah Layanan</h5>
                    <small class="text-muted float-end">Form untuk menambah layanan baru</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Judul Layanan -->
                        <div class="mb-3">
                            <label for="judul_layanan" class="form-label">Judul Layanan</label>
                            <input type="text" name="judul_layanan" id="judul_layanan" class="form-control" value="{{ old('judul_layanan') }}" required>
                            @error('judul_layanan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Isi Layanan (with CKEditor) -->
                        <div class="mb-3">
                            <label for="isi_layanan" class="form-label">Isi Layanan</label>
                            <textarea name="isi_layanan" id="isi_layanan" class="form-control" rows="5" required>{{ old('isi_layanan') }}</textarea>
                            @error('isi_layanan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Upload Gambar -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="upload_gambar">Upload Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="upload_gambar" id="upload_gambar" class="form-control" accept="image/*">
                                @error('upload_gambar')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Format yang diterima: jpg, png, jpeg (maksimal 2MB)</small>
                            </div>
                        </div>

                        <!-- Upload File (PDF, DOC, DOCX) -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="file">Upload File</label>
                            <div class="col-sm-10">
                                <input type="file" name="file" id="file" class="form-control" accept=".pdf,.doc,.docx">
                                @error('file')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Format yang diterima: pdf, doc, docx (maksimal 2MB)</small>
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('layanan.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include CKEditor script -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi_layanan');  // Initializes CKEditor on the textarea
</script>
@endsection
