@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    Berita
                    <!-- Tombol Tambah Data -->
                    <a href="{{ route('berita.create') }}" class="btn btn-primary">
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
                                <th>Isi</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($beritas as $berita)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $berita->judul }}</strong></td>
                                <td>{{ Str::limit($berita->isi, 50) }}</td> <!-- Limiting text display -->
                                <td>{{ $berita->tanggal->format('d-m-Y') }}</td>
                                <td>{{ $berita->kategori_nama }}</td>
                                <td>{{ $berita->author }}</td>
                                <td>
                                    <!-- Tombol Show -->
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $berita->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>

                                    <!-- Tombol Edit -->
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal untuk Show -->
                            <div class="modal fade" id="showModal{{ $berita->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Berita</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Judul:</strong> {{ $berita->judul }}</p>
                                            <p><strong>Isi:</strong></p>
                                            <div class="isi-berita overflow-auto" style="max-height: 300px;">
                                                {!! $berita->isi !!}
                                            </div>
                                            <p><strong>Tanggal:</strong> {{ $berita->tanggal->format('d-m-Y') }}</p>
                                            <p><strong>Kategori:</strong> {{ $berita->kategori_nama }}</p>
                                            <p><strong>Author:</strong> {{ $berita->author }}</p>
                                            @if($berita->gambar)
                                                <div class="text-center mt-3 mb-2">
                                                    <strong>Gambar:</strong><br>
                                                    <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid rounded" alt="Gambar Berita" style="max-width: 100%;">
                                                </div>
                                            @else
                                                <p>No Image</p>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
