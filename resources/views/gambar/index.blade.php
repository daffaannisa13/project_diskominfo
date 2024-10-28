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
                                <th>URL Gambar</th>
                                <th>Kategori</th>
                                <th>User</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($gambars as $gambar)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ $gambar->url }}" target="_blank" class="long-url">{{ $gambar->url }}</a>
                                </td>
                                <td>{{ $gambar->kategori->nama_kategori }}</td>
                                <td>{{ $gambar->user->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $gambar->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>
                                    <a href="{{ route('gambar.edit', $gambar->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>
                                    <form action="{{ route('gambar.destroy', $gambar->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal for showing image details -->
                            <div class="modal fade" id="showModal{{ $gambar->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $gambar->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $gambar->id }}">Detail Gambar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>URL Gambar:</strong> 
                                                <a href="{{ $gambar->url }}" target="_blank" class="long-url-modal">{{ $gambar->url }}</a>
                                            </p>
                                            <p><strong>Kategori:</strong> {{ $gambar->kategori->nama_kategori }}</p>
                                            <p><strong>User:</strong> {{ $gambar->user->name }}</p>
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

<style>
    /* CSS untuk memotong teks URL yang terlalu panjang */
    .long-url, .long-url-modal {
        display: inline-block;
        max-width: 200px; /* Sesuaikan dengan lebar yang diinginkan */
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        vertical-align: middle;
    }

    /* Memperbaiki jarak teks dalam modal */
    .modal-body p {
        margin-bottom: 0.4rem;
    }
</style>
@endsection
