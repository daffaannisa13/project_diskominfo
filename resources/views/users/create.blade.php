@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Tambah Pengguna</h5>
                    <small class="text-muted float-end">Form Tambah Pengguna</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <!-- Nama -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="name">Nama Pengguna</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="username">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
                                @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Konfirmasi Password -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="password_confirmation">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>
                        </div>

                        <!-- Bidang -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="bidang_id">Bidang</label>
                            <div class="col-sm-10">
                                <select name="bidang_id" class="form-select" required>
                                    <option value="" disabled selected>Pilih Bidang</option>
                                    @foreach($bidangs as $bidang)
                                        <option value="{{ $bidang->id }}">{{ $bidang->nama_bidang }}</option>
                                    @endforeach
                                </select>
                                @error('bidang_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
