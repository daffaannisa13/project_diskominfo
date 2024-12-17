<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travela - Tourism Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
</head>
<style>
    /* Main Page Background Gradient */
    .main-page {
        background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(55, 125, 255, 0.125) 100%);
        padding-top: 20px;
        padding-bottom: 50px;
    }

    /* Typography and Base Styling */
    body {
        color: #777;
        font-family: "Poppins", sans-serif;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.5;
        margin: 0;
        background-color: #fff;
    }

    /* Universal Box Sizing */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    /* Display for Section Elements */
    section,
    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav {
        display: block;
    }

    /* News Item Styling */
    .news-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }

    .news-item img {
        width: 100px;
        height: 80px;
        margin-right: 15px;
        object-fit: cover;
        border-radius: 5px;
    }

    .news-content {
        flex: 1;
    }

    .news-title {
        font-size: 1.1em;
        font-weight: bold;
        color: #007bff;
        margin: 0;
        padding: 0;
    }

    .news-meta {
        font-size: 0.85em;
        color: #555;
        margin: 5px 0;
    }

    .news-excerpt {
        color: #555;
    }

    .media {
        display: flex;
        align-items: flex-start;
    }

    .media-body {
        flex: 1;
    }

    .news-title,
    .text-primary {
        font-weight: bold;
        text-decoration: none;
    }

    .news-title:hover,
    .text-primary:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .mr-3, .mx-3 {
    margin-right: 1rem !important;
}
.navbar-brand img {
    height: 150px ;
    width: auto ;
    margin-right: 10px;
}


</style>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <!-- Atur ke col-lg-12 agar kontainer memanjang penuh, kemudian text-end untuk rata kanan -->
            <div class="col-lg-12 text-end">
                <div class="d-inline-flex align-items-center justify-content-end" style="height: 45px;">
                    <!-- Login Link -->
                    <a href="/admin"><small class="me-3 text-light"><i
                                class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <div class="navbar-content text-center"> <!-- Memastikan konten terpusat -->
            {{-- @foreach($deskripsiSistems as $deskripsiSistem) --}}
               <div class="navbar-item">
    @if(isset($deskripsiSistems->logo_frontend) && !empty($deskripsiSistems->logo_frontend))
        <img src="{{ asset('storage/' . $deskripsiSistems->logo_frontend) }}" 
             alt="{{ $deskripsiSistems->alias }}" 
             style="width: 70px; height: 70px; margin-bottom: 2px;">
    @else
        <img src="{{ asset('assets/img/logo.png') }}" 
             alt="Logo Default" 
             style="width: 70px; height: 70px; margin-bottom: 2px;">
    @endif

    @if(isset($deskripsiSistems->alias) && !empty($deskripsiSistems->alias))
        <h5 class="text-white" style="font-size: 16px; margin-top: 5px; margin-bottom: 1px;">{{ $deskripsiSistems->alias }}</h5>
        @else
        <h5 class="text-white" style="font-size: 16px; margin-top: 5px; margin-bottom: 5px;">
            Diskominfo
        </h5>
    @endif

    @if(isset($deskripsiSistems->deskripsi) && !empty($deskripsiSistems->deskripsi))
        <p class="text-white" style="font-size: 12px; margin-top: 0; margin-bottom: 0;">{{ $deskripsiSistems->deskripsi }}</p>
        @else
        <p class="text-white" style="font-size: 12px; margin-top: 0; margin-bottom: 0;"> Dinas Komunikasi dan Informatika</p>
    @endif
</div>

            {{-- @endforeach --}}
        </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/layanan.html" class="nav-item nav-link">Layanan</a>
                        {{-- <a href="info.html" class="nav-item nav-link">Info Penting</a> --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Informasi</a>
                            <div class="dropdown-menu m-0">
                                <a href="/design.html" class="dropdown-item">Agenda</a>
                                <a href="/teknologi.html" class="dropdown-item">Dokumen</a>
                                <a href="/berita.html" class="dropdown-item active">Berita</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                            <div class="dropdown-menu m-0">
                                <a href="/gallery.html" class="dropdown-item">Foto</a>
                                <a href="/video.html" class="dropdown-item">Video</a>
                            </div>
                        </div>
                        <a href="/contact.html" class="nav-item nav-link">Kontak Kami</a>
                    </div>
                </div>
            </nav>
    </div>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Berita</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Berita</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

  <!-- Packages Start -->
<div class="container py-5">
    <div class="text-center mb-5" style="max-width: 900px; margin: 0 auto;">
        <h5 class="section-title px-3">Berita</h5>
        <h1 class="mb-0">Berita</h1>
    </div>

    
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-weight-bold mb-4">Berita Terbaru</h3>
                        </div>
                        <div class="card-body">
                            <div id="newsfeed">
                                @foreach ($beritas as $berita)
                                    <div class="media mb-4">
                                        <img src="{{ asset('storage/' . $berita->gambar) }}"
                                             class="mr-3 rounded d-none d-sm-block" 
                                             alt="{{ $berita->judul }}"
                                             style="width: 120px; height: 120px; object-fit: cover;">
                                        <div class="media-body">
                                            <h5 class="mb-1 font-weight-bold">
                                                <a href="{{ route('berita.show', $berita->id) }}" 
                                                   class="text-dark">{{ $berita->judul }}</a>
                                            </h5>
                                            <p class="small text-muted mb-2">
                                                <i class="fa fa-user"></i> {{ $berita->author }} &nbsp;&nbsp;
                                                <i class="fa fa-calendar"></i>
                                                {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                                            </p>
                                            <p class="text-justify">
                                                {{ Str::limit($berita->isi, 90) }}
                                                <a href="{{ route('tampilan.detail', $berita->id) }}" 
                                                   class="text-primary">read more »</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>
<!-- Packages End -->




    
         <!-- Footer Start -->
         <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <!-- Bagian Kiri: Logo dan Deskripsi Sistem -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column text-center">
                            <center>
                            @if(isset($deskripsiSistems->logo_frontend) && !empty($deskripsiSistems->logo_frontend))
                                <img src="{{ asset('storage/' . $deskripsiSistems->logo_frontend) }}" 
                                     alt="{{ $deskripsiSistems->alias }}" 
                                     style="width: 70px; height: 70px; margin-bottom: 10px;">
                            @else
                                <img src="{{ asset('assets/img/logo.png') }}" 
                                     alt="Logo Default" 
                                     style="width: 70px; height: 70px; margin-bottom: 10px;">
                            @endif
                        </center>
                            @if(isset($deskripsiSistems->alias) && !empty($deskripsiSistems->alias))
                                <h5 class="text-white" style="font-size: 16px; margin-top: 5px; margin-bottom: 5px;">
                                    {{ $deskripsiSistems->alias }}
                                </h5>
                                @else
                                <h5 class="text-white" style="font-size: 16px; margin-top: 5px; margin-bottom: 5px;">
                                    Diskominfo
                                </h5>
                            @endif
                            @if(isset($deskripsiSistems->deskripsi) && !empty($deskripsiSistems->deskripsi))
                                <p class="text-white" style="font-size: 12px; margin-top: 0; margin-bottom: 0;">
                                    {{ $deskripsiSistems->deskripsi }}
                                </p>
                                @else
                                <p class="text-white" style="font-size: 16px; margin-top: 5px; margin-bottom: 5px;">
                                    Dinas Komunikasi dan Informatika
                                </p>
                            @endif
                        </div>
                    </div>
        
                    <!-- Bagian Tengah: Get In Touch -->
                    @foreach($kontaks as $kontak)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="mb-4 text-white">Get In Touch</h4>
                                <a href="">
                                    <i class="fas fa-map-marker-alt"></i> {{ $kontak->alamat ?? 'Address not available' }}
                                </a>
                                <a href="mailto:{{ $kontak->email ?? '#' }}">
                                    <i class="fas fa-envelope me-2"></i> {{ $kontak->email ?? 'Email not available' }}
                                </a>
                                <a href="tel:{{ $kontak->no_telp ?? '#' }}">
                                    <i class="fas fa-phone me-2"></i> {{ $kontak->no_telp ?? 'Phone number not available' }}
                                </a>
                            </div>
                        </div>
                    @endforeach
        
                    <!-- Bagian Menu -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Menu</h4>
                            <a href="/"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="layanan.html"><i class="fas fa-angle-right me-2"></i> Layanan</a>
                            <!-- Dropdown Informasi -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fas fa-angle-right me-2"></i> Informasi
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="design.html">Agenda</a></li>
                                    <li><a class="dropdown-item" href="teknologi.html">Dokumen</a></li>
                                    <li><a class="dropdown-item" href="berita.html">Berita</a></li>
                                </ul>
                            </div>
                            <!-- Dropdown Galeri -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fas fa-angle-right me-2"></i> Galeri
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="gallery.html">Foto</a></li>
                                    <li><a class="dropdown-item" href="video.html">Video</a></li>
                                </ul>
                            </div>
                            <a href="contact.html"><i class="fas fa-angle-right me-2"></i> Kontak Kami</a>
                        </div>
                    </div>
        
                    <!-- Bagian Sosial Media -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Sosial Media</h4>
                            @foreach($sosial as $sosials)
                                <div class="d-flex align-items-center mb-2">
                                    <a class="btn-square btn btn-primary rounded-circle me-2" href="{{ $sosials->url ?? '#' }}" target="_blank">
                                        @if($sosials->icon == 'instagram')
                                            <i class="fab fa-instagram"></i>
                                        @elseif($sosials->icon == 'youtube')
                                            <i class="fab fa-youtube"></i>
                                        @elseif($sosials->icon == 'twitter')
                                            <i class="fab fa-twitter"></i>
                                        @else
                                            <i class="fas fa-globe"></i>
                                        @endif
                                    </a>
                                    <span class="text-white">{{ $sosials->nama }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer End -->

    <!-- Copyright Start -->
        {{-- <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Diskominfo</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        By <a class="text-white" href="">Dinas Komunikasi dan Informatika</a> ©<a class="text-white" href="">2024</a>
                    </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/lib/lightbox/js/lightbox.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>
