@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Pengguna</h5>
                    <small class="text-muted float-end">Form Edit Pengguna</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Penting untuk method PUT -->

                        <!-- Nama -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="username">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" id="username" class="form-control" value="{{ old('username', $user->username) }}" required>
                                @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Bidang Dropdown -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="bidang_id">Bidang</label>
                            <div class="col-sm-10">
                                <select name="bidang_id" id="bidang_id" class="form-control" required>
                                    <option value="">Pilih Bidang</option>
                                    @foreach ($bidangs as $bidang)
                                        <option value="{{ $bidang->id }}" {{ (old('bidang_id', $user->bidang_id) == $bidang->id) ? 'selected' : '' }}>
                                            {{ $bidang->nama_bidang }} <!-- Ganti 'name' dengan atribut yang sesuai dari model Bidang -->
                                        </option>
                                    @endforeach
                                </select>
                                @error('bidang_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Baru -->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="password">Password Baru</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" id="password" class="form-control">
                                <small class="text-muted">Masukkan password baru jika ingin mengganti password.</small>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Konfirmasi Password -->
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label" for="password_confirmation">Konfirmasi Password</label>
    <div class="col-sm-10">
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        <small class="text-muted">Masukkan ulang password baru untuk konfirmasi.</small>
        @error('password_confirmation')
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
