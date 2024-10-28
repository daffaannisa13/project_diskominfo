@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    Daftar Deskripsi Sistem
                    <a href="{{ route('deskripsi_sistem.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Tambah Data
                    </a>
                </h5>

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alias</th>
                                <th>Deskripsi</th>
                                <th>Tahun</th>
                                <th>Nama Organisasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($deskripsiSistems as $deskripsiSistem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $deskripsiSistem->nama }}</strong></td>
                                <td>{{ $deskripsiSistem->alias }}</td>
                                <td>{{ Str::limit($deskripsiSistem->deskripsi, 50) }}...</td>
                                <td>{{ $deskripsiSistem->tahun }}</td>
                                <td>{{ $deskripsiSistem->nama_organisasi }}</td>
                                <td>
                                    <!-- Show details button -->
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $deskripsiSistem->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>

                                    <!-- Edit button -->
                                    <a href="{{ route('deskripsi_sistem.edit', $deskripsiSistem->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>

                                    <!-- Delete form -->
                                    <form action="{{ route('deskripsi_sistem.destroy', $deskripsiSistem->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>                                  
                                </td>
                            </tr>

                            <!-- Modal for Show -->
                            <div class="modal fade" id="showModal{{ $deskripsiSistem->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $deskripsiSistem->id }}" aria-hidden="true">
                                <div class="modal-dialog"> <!-- Changed to modal-sm for a smaller modal -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $deskripsiSistem->id }}">Detail Deskripsi Sistem</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Nama:</strong> {{ $deskripsiSistem->nama }}<br>
                                            <strong>Alias:</strong> {{ $deskripsiSistem->alias }}<br>
                                            <strong>Deskripsi:</strong> {{ $deskripsiSistem->deskripsi }}<br>
                                            <strong>Tahun:</strong> {{ $deskripsiSistem->tahun }}<br>
                                            <strong>Nama Organisasi:</strong> {{ $deskripsiSistem->nama_organisasi }}<br>
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
