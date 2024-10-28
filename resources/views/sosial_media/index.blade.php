@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    Daftar Sosial Media
                    <a href="{{ route('sosial_media.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Tambah Data
                    </a>
                </h5>
                <br>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Icon</th>
                                <th>Warna</th>
                                <th>URL</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($sosialMedia as $media)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $media->nama }}</strong></td>
                                <td>{{ $media->icon }}</td>
                                <td style="color: {{ $media->color }}">{{ $media->color }}</td>
                                <td><a href="{{ $media->url }}" target="_blank" class="long-url">{{ $media->url }}</a></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $media->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>

                                    <a href="{{ route('sosial_media.edit', $media->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>

                                    <form action="{{ route('sosial_media.destroy', $media->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal untuk Show -->
                            <div class="modal fade" id="showModal{{ $media->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Sosial Media</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Nama:</strong> {{ $media->nama }}</p>
                                            <p><strong>Icon:</strong> {{ $media->icon }}</p>
                                            <p><strong>Warna:</strong> <span style="color: {{ $media->color }}">{{ $media->color }}</span></p>
                                            <p><strong>URL:</strong> <a href="{{ $media->url }}" target="_blank" class="long-url-modal">{{ $media->url }}</a></p>
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
