@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Gambar</h5>
                        <small class="text-muted float-end">Form untuk menambahkan gambar baru</small>
                    </div>
                    <div class="card-body">
                        <!-- Form to add a new image -->
                        <form action="{{ route('gambar.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Input for Image URL -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="url">URL Gambar</label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" id="url" name="url" placeholder="Masukkan URL gambar" value="{{ old('url') }}" required />
                                    <small class="form-text text-muted">Masukkan URL gambar yang valid (contoh: https://example.com/image.jpg).</small>
                                    @error('url')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Select for Image Category -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kategori_id">Kategori Gambar</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="kategori_id" name="kategori_id" required>
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        @foreach($kategori as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Hidden Input for Logged-in User ID -->
                            <input type="hidden" name="users_id" value="{{ $userId }}">

                            <!-- Form Submission Buttons -->
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('gambar.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
