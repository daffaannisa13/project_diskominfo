@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Layanan</h5>
                    <small class="text-muted float-end">Form Edit Layanan</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Judul Layanan -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="judul_layanan">Judul Layanan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul_layanan" name="judul_layanan" placeholder="Masukkan judul layanan" value="{{ old('judul_layanan', $layanan->judul_layanan) }}" required />
                                @error('judul_layanan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Isi Layanan (with CKEditor) -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="isi_layanan">Isi Layanan</label>
                            <div class="col-sm-10">
                                <textarea name="isi_layanan" id="isi_layanan" class="form-control" rows="5" required>{{ old('isi_layanan', $layanan->isi_layanan) }}</textarea>
                                @error('isi_layanan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Upload Gambar -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="upload_gambar">Upload Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="upload_gambar" id="upload_gambar" class="form-control" accept="image/*">
                                <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                                @error('upload_gambar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                @if ($layanan->upload_gambar)
                                    <div class="mt-2">
                                        <img src="{{ Storage::url($layanan->upload_gambar) }}" alt="layanan Gambar" class="img-thumbnail" style="max-width: 150px;">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Upload File (PDF, DOC, DOCX) -->
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label" for="file">Upload File</label>
    <div class="col-sm-10">
        <input type="file" name="file" id="file" class="form-control" accept=".pdf,.doc,.docx">
        <small class="text-muted">Kosongkan jika tidak ingin mengubah file.</small>
        @error('file')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        @if ($layanan->file)
            <div class="mt-2">
                <!-- Untuk file PDF, menggunakan Google Docs Viewer -->
                @if (pathinfo($layanan->file, PATHINFO_EXTENSION) == 'pdf')
                    <a href="{{ Storage::url($layanan->file) }}" target="_blank" class="btn btn-link">Lihat File PDF</a>
                @endif

                <!-- Untuk file DOC/DOCX, langsung unduh -->
                @if (in_array(pathinfo($layanan->file, PATHINFO_EXTENSION), ['doc', 'docx']))
                    <a href="{{ Storage::url($layanan->file) }}" class="btn btn-link" download>Unduh File DOC/DOCX</a>
                @endif
            </div>
        @endif
    </div>
</div>


                        <!-- Tombol Submit -->
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('layanan.index') }}" class="btn btn-secondary ms-2">Kembali</a>
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
    CKEDITOR.replace('isi_layanan');  // Initializes CKEditor on the textarea
</script>
@endsection
