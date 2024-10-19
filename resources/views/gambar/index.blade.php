@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    Gambar
                    <a href="{{ route('gambar.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Tambah Data
                    </a>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Kategori ID</th>
                                <th>User ID</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($gambars as $gambar)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ $gambar->url }}" target="_blank">
                                        <img src="{{ $gambar->url }}" alt="Gambar" style="width: 100px; height: auto;"/>
                                    </a>
                                </td>
                                <td>{{ $gambar->kategori->nama_kategori }}</td>
                                <td>{{ $gambar->users_id }}</td>
                                <td>
                                    <!-- Tombol untuk menampilkan modal detail -->
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $gambar->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>
                                    <!-- Tombol untuk mengedit data -->
                                    <a href="{{ route('gambar.edit', $gambar->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>
                                    <!-- Form untuk menghapus data -->
                                    <form action="{{ route('gambar.destroy', $gambar->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal untuk menampilkan detail gambar -->
                            <div class="modal fade" id="showModal{{ $gambar->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $gambar->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $gambar->id }}">Detail Gambar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <strong>Gambar:</strong> 
                                            <a href="{{ $gambar->url }}" target="_blank">{{ $gambar->url }}</a>
                                            <br>
                                            <img src="{{ $gambar->url }}" alt="Gambar" style="width: 300px; height: auto;"/>
                                            <br>
                                            <strong>Kategori ID:</strong> {{ $gambar->kategori->nama_kategori }}
                                            <br>
                                            <strong>User ID:</strong> {{ $gambar->users_id }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
