@extends('layouts.app')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang, {{ $userName }}! 🎉</h5>
                          <p class="mb-4">
                           Anda Dapat Melakukan Pengelolaan
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
              

   <!-- Sertakan Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="row">
    <!-- Kartu Jumlah Pengguna -->
    <div class="col-3 mb-4">
        <div class="card text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <div class="avatar flex-shrink-0 mb-3">
                    <i class="fas fa-users fa-2x"></i>
                </div>
                <span class="fw-semibold d-block mb-1">Jumlah Pengguna</span>
                <h3 class="card-title mb-0">{{ $usersCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Kartu Jumlah Agenda -->
    <div class="col-2 mb-4">
        <div class="card text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <div class="avatar flex-shrink-0 mb-3">
                    <i class="fas fa-calendar-alt fa-2x"></i>
                </div>
                <span class="fw-semibold d-block mb-1">Jumlah Agenda</span>
                <h3 class="card-title mb-0">{{ $agendasCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Kartu Jumlah Foto -->
    <div class="col-2 mb-4">
        <div class="card text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <div class="avatar flex-shrink-0 mb-3">
                    <i class="fas fa-image fa-2x"></i>
                </div>
                <span class="fw-semibold d-block mb-1">Jumlah Foto</span>
                <h3 class="card-title mb-0">{{ $photosCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Kartu Jumlah Video -->
    <div class="col-2 mb-4">
        <div class="card text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <div class="avatar flex-shrink-0 mb-3">
                    <i class="fas fa-video fa-2x"></i>
                </div>
                <span class="fw-semibold d-block mb-1">Jumlah Video</span>
                <h3 class="card-title mb-0">{{ $videosCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Kartu Jumlah Dokumen -->
    <div class="col-3 mb-4">
        <div class="card text-center">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <div class="avatar flex-shrink-0 mb-3">
                    <i class="fas fa-file-alt fa-2x"></i>
                </div>
                <span class="fw-semibold d-block mb-1">Jumlah Dokumen</span>
                <h3 class="card-title mb-0">{{ $documentsCount }}</h3>
            </div>
        </div>
    </div>
</div>

                

                    
                    <!-- </div>
@endsection