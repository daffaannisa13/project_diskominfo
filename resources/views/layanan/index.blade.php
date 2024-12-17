@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    Daftar Layanan
                    <a href="{{ route('layanan.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Tambah Layanan
                    </a>
                </h5>
                <br>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Layanan</th>
                                <th>Isi Layanan</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($layanans as $layanan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $layanan->judul_layanan }}</strong></td>
                                <td>{!! Str::limit(strip_tags($layanan->isi_layanan), 50) !!}...</td>
                                <td>
                                    @if($layanan->file)
                                        <img src="{{ asset('storage/'.$layanan->upload_gambar) }}" class="img-fluid" alt="Gambar Layanan" style="width: 50px; height: auto;">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $layanan->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>

                                    <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>

                                    <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal untuk Show -->
                            <div class="modal fade" id="showModal{{ $layanan->id }}" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="showModalLabel">Detail Layanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Judul Layanan:</strong> {{ $layanan->judul_layanan }}</p>
                                            <p><strong>Isi Layanan:</strong></p>
                                            <div class="isi-layanan overflow-auto" style="max-height: 300px;">
                                                {!! $layanan->isi_layanan !!}
                                            </div>

                                            <!-- Tampilkan gambar -->
                                            @if($layanan->upload_gambar)
                                                <div class="text-center my-3">
                                                    <img src="{{ asset('storage/'.$layanan->upload_gambar) }}" class="img-fluid rounded" alt="Gambar Layanan" style="max-width: 100%; max-height: 400px; object-fit: contain;">
                                                </div>
                                            @endif

                                            <!-- Tampilkan file -->
                                            @if($layanan->file)
                                                <p><strong>File:</strong></p>
                                                <div>
                                                    @php
                                                        $fileExtension = pathinfo($layanan->file, PATHINFO_EXTENSION);
                                                    @endphp
                                                    @if($fileExtension == 'pdf')
                                                        <a href="{{ asset('storage/'.$layanan->file) }}" target="_blank" class="btn btn-primary">Lihat PDF</a>
                                                    @elseif(in_array($fileExtension, ['doc', 'docx']))
                                                        <a href="{{ asset('storage/'.$layanan->file) }}" class="btn btn-primary" download>Unduh Dokumen</a>
                                                    @endif
                                                </div>
                                            @endif
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
