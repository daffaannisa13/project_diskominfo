@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    Daftar Profil
                    <a href="{{ route('profil.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Tambah Data
                    </a>
                </h5>
                <div class="table-responsive text-nowrap mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Profil</th>
                                <th>Isi Profil</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($profils as $profil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $profil->judul_profil }}</strong></td>
                                <td>{!! Str::limit(strip_tags($profil->isi_profil), 50) !!}...</td>
                                <td>
                                    @if($profil->upload_gambar)
                                        <img src="{{ asset('storage/'.$profil->upload_gambar) }}" class="img-fluid" alt="Gambar Profil" style="width: 50px; height: auto;">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <!-- View Button -->
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{ $profil->id }}">
                                        <i class="bx bx-show"></i>
                                    </button>

                                    <!-- Edit Button -->
                                    <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>

                                    <!-- Delete Form -->
                                    <form action="{{ route('profil.destroy', $profil->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                       <!-- Modal untuk Show -->
                            <div class="modal fade" id="showModal{{ $profil->id }}" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="showModalLabel">Detail Profil</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Judul Profil:</strong> {{ $profil->judul_profil }}</p>
                                            <p><strong>Isi Profil:</strong></p>
                                            <div class="isi-profil overflow-auto" style="max-height: 300px;">
                                                {!! $profil->isi_profil !!}
                                            </div>

                                            <!-- Tampilkan gambar -->
                                            @if($profil->upload_gambar)
                                                <div class="text-center my-3">
                                                    <img src="{{ asset('storage/'.$profil->upload_gambar) }}" class="img-fluid rounded" alt="Gambar Profil" style="max-width: 100%; max-height: 400px; object-fit: contain;">
                                                </div>
                                            @endif

                                            <!-- Tampilkan file -->
                                            @if($profil->file)
                                                <p><strong>File:</strong></p>
                                                <div>
                                                    @php
                                                        $fileExtension = pathinfo($profil->file, PATHINFO_EXTENSION);
                                                    @endphp
                                                    @if($fileExtension == 'pdf')
                                                        <a href="{{ asset('storage/'.$profil->file) }}" target="_blank" class="btn btn-primary">Lihat PDF</a>
                                                    @elseif(in_array($fileExtension, ['doc', 'docx']))
                                                        <a href="{{ asset('storage/'.$profil->file) }}" class="btn btn-primary" download>Unduh Dokumen</a>
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

                    <!-- Pagination (if necessary) -->
                    {{ $profils->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openBlankPage() {
        window.open('about:blank', '_blank');
    }
</script>

@endsection
