@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    Dokumen
                    <a href="{{ route('dokumen.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Tambah Data
                    </a>
                </h5>
                <br>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>URL</th>
                                <th>Kategori</th>
                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($dokumens as $dokumen)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $dokumen->judul }}</strong></td>
                                <td><a href="{{ $dokumen->url }}" target="_blank" class="long-url">{{ $dokumen->url }}</a></td>
                                <td>{{ $dokumen->kategori->nama_kategori }}</td>
                                
                                <td>
                                    <!-- Button to show modal -->
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $dokumen->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>
                                    <!-- Button to edit document -->
                                    <a href="{{ route('dokumen.edit', $dokumen->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>
                                    <!-- Form to delete document -->
                                    <form action="{{ route('dokumen.destroy', $dokumen->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal for showing document details -->
                            <div class="modal fade" id="showModal{{ $dokumen->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $dokumen->id }}" aria-hidden="true">
                                <div class="modal-dialog"> <!-- Default size modal -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $dokumen->id }}">Detail Dokumen</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Judul:</strong> {{ $dokumen->judul }}</p>
                                            <p><strong>URL:</strong> <a href="{{ $dokumen->url }}" target="_blank" class="long-url-modal">{{ $dokumen->url }}</a></p>
                                            <p><strong>Kategori:</strong> {{ $dokumen->kategori->nama_kategori }}</p>
                                            
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
