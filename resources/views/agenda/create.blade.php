@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Agenda</h5>
                        <small class="text-muted float-end">Form Tambah Agenda</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('agenda.store') }}" method="POST">
                            @csrf

                            <!-- Nama Kategori (diambil dari database) -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kategori_id">Nama Kategori</label>
                                <div class="col-sm-10">
                                    <select name="kategori_id" class="form-select">
                                        <option value="">-- Pilih Kategori --</option>
                                        @foreach ($kategoriAgenda as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>

                                    @error('kategori_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('agenda.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
