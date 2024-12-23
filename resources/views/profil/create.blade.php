@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Tambah Profil</h5>
                    <small class="text-muted float-end">Form untuk menambah profil baru</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Judul Profil -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="judul_profil">Judul Profil</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul_profil" id="judul_profil" class="form-control" value="{{ old('judul_profil') }}" required>
                                @error('judul_profil')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Isi Profil (with CKEditor) -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="isi_profil">Isi Profil</label>
                            <div class="col-sm-10">
                                <textarea name="isi_profil" id="isi_profil" class="form-control" rows="5" required>{{ old('isi_profil') }}</textarea>
                                @error('isi_profil')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
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
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('profil.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                            </div>
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
    CKEDITOR.replace('isi_profil');  // Initializes CKEditor on the textarea
</script>
@endsection
