@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Kategori Gambar</h5>
                        <small class="text-muted float-end">Form untuk menambahkan kategori gambar baru</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori-gambar.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama_kategori">Nama Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukkan nama kategori" value="{{ old('nama_kategori') }}" required />
                                    @error('nama_kategori')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="url">Upload Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="url" name="url" required accept="image/*" />
                                    @error('url')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('kategori-gambar.index') }}" class="btn btn-secondary ms-2">Kembali</a>
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
