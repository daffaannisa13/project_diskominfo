<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Diskominfo</title>
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

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0">
        <!-- Atur ke col-lg-12 agar kontainer memanjang penuh, kemudian text-end untuk rata kanan -->
        <div class="col-lg-12 text-end">
            <div class="d-inline-flex align-items-center justify-content-end" style="height: 45px;">
                <!-- Login Link -->
                <a href="/admin"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
            </div>
        </div>
    </div>
</div>


        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link active">Beranda</a>
                        <a href="berita.html" class="nav-item nav-link">Berita</a>
                        <a href="layanan.html" class="nav-item nav-link">Layanan</a>
                        <a href="info.html" class="nav-item nav-link">Info Penting</a>
                        <a href="blog.html" class="nav-item nav-link">Download File</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pojok Kita</a>
                            <div class="dropdown-menu m-0">
                                <a href="design.html" class="dropdown-item">Agenda</a>
                                <a href="teknologi.html" class="dropdown-item">pojok teknologi</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Kontak Kami</a>
                    </div>
                </div>
            </nav>
        </div>
                
                

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="user/img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Diskominfo</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Purwakarta</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="user/img/carousel-1.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Disakominfo</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Purwakarta</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="user/img/carousel-3.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Disakominfo</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Purwakarta</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            @if(isset($profil) && $profil->upload_gambar)
                            <img src="{{ asset('storage/' . $profil->upload_gambar) }}" class="img-fluid w-100 h-100" alt="">
                            @else
                            <img src="{{ asset('assets/img/avatars/test.jpg') }}"  class="img-fluid w-100 h-100" alt="">
                            {{-- <p>Gambar tidak tersedia</p> --}}
                        @endif
                        
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(user/img/about-img-1.png);">
                         <h5 class="section-about-title pe-3">Kepala Dinas</h5>
                         <h1 class="mb-4">{{ $profil->judul_profil ?? 'Rudi Hartono,S.Ap.' }}</h1>
                <p class="mb-4">{{ $profil->isi_profil ?? 'Assalamualaikum Wr. Wb.
                Wilujeng Sumping di Website Dinas Komunikasi dan Informatika Kabupaten Purwakarta.
                Website ini salah satu media penyampai informasi dan sebagai jembatan untuk membangun komunikasi interaktif antara pemerintah dengan masyarakat/pengunjung. Harapan kami semoga website Diskominfo dapat memberikan kontribusi dalam meningkatkan pelayanan informasi kepada masyarakat.'}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Berita</h5>
            <h1 class="mb-0">Berita</h1>
        </div>
        <div class="packages-carousel owl-carousel">
             @foreach($beritas as $berita)
            <div class="packages-item">
                <div class="packages-img">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid w-100 rounded-top" alt="{{ $berita->judul }}">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                        style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center py-2 px-2"><i class="fa fa-calendar-alt me-2"></i>{{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                        <small class="flex-fill text-center py-2 px-4"><i class="fa fa-user me-2"></i>{{ $berita->author }}</small>
                    </div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">{{ $berita->judul }}</h5>
                        <small class="text-uppercase">Category: {{ $berita->kategori_nama }}</small>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p class="mb-4">{{ Str::limit($berita->isi, 100) }}</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="{{ route('berita.show', $berita->id) }}" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
</div>

<!-- Packages End -->

    <!-- Services Start -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Services</h5>
            <h1 class="mb-0">Our Services</h1>
        </div>
        <div class="row g-4">
            <!-- Diskominfo Service -->
            <div class="col-lg-4 col-md-6">
                <a href="/diskominfo" class="text-decoration-none">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                        <div class="service-icon p-4">
                            <i class="fa fa-globe fa-4x text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h5 class="mb-4">Diskominfo</h5>
                            {{-- <p class="mb-0">Deskripsi singkat layanan Diskominfo...</p> --}}
                        </div>
                    </div>
                </a>
            </div>

            <!-- Layanan Service -->
            <div class="col-lg-4 col-md-6">
                <a href="/layanan" class="text-decoration-none">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                        <div class="service-icon p-4">
                            <i class="fa fa-hotel fa-4x text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h5 class="mb-4">Layanan</h5>
                            {{-- <p class="mb-0">Deskripsi singkat layanan...</p> --}}
                        </div>
                    </div>
                </a>
            </div>

            <!-- PPID Service -->
            <div class="col-lg-4 col-md-6">
                <a href="https://ppid.purwakartakab.go.id/" class="text-decoration-none">
                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                        <div class="service-icon p-4">
                            <i class="fa fa-user fa-4x text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h5 class="mb-4">PPID</h5>
                            {{-- <p class="mb-0">Deskripsi singkat layanan PPID...</p> --}}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Services End -->


        <!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Our Gallery</h5>
        <h1 class="mb-4">Galeri Foto</h1>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.</p>
    </div>

    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-All">
                    <span class="text-dark" style="width: 150px;">All</span>
                </a>
            </li>
            @foreach ($kategoriGambar as $kategori)
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-{{ $kategori->id }}">
                        <span class="text-dark" style="width: 150px;">{{ $kategori->nama_kategori }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content">
            <!-- All Images Tab -->
            <div id="GalleryTab-All" class="tab-pane fade show p-0 active">
                <div class="row g-2">
                    @foreach ($gambars as $gambar)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ $gambar->url }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">{{ $gambar->kategori->nama_kategori }}</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ $gambar->url }}" data-lightbox="gallery-{{ $gambar->id }}" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Category-Specific Tabs -->
            @foreach ($kategoriGambar as $kategori)
                <div id="GalleryTab-{{ $kategori->id }}" class="tab-pane fade p-0">
                    <div class="row g-2">
                        @foreach ($gambars->where('kategori_id', $kategori->id) as $gambar)
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{ $gambar->url }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                            <h5 class="text-white text-uppercase mb-2">{{ $gambar->kategori->nama_kategori }}</h5>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{ $gambar->url }}" data-lightbox="gallery-{{ $gambar->id }}" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Message if no images available -->
                        @if ($gambars->where('kategori_id', $kategori->id)->isEmpty())
                            <div class="col-12">
                                <p class="text-white">No images available in this category.</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Gallery End -->


        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Agenda</h5>
                    <h1 class="mb-4">Agenda Terbaru</h1>
                    <p class="mb-0">Ikuti agenda terkini dan jangan lewatkan berbagai kegiatan penting yang akan datang. Dari seminar hingga workshop, temukan kesempatan untuk belajar, berjejaring, dan memperluas wawasan Anda. Mari bergabung dan jadilah bagian dari setiap momen yang berharga.</p>
                    <?php //var_dump($agenda) ?>
                </div>
                <div class="row g-4 justify-content-center">
                    <?php foreach ($agenda as $event): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <div class="blog-img">
                                    {{-- <div class="blog-img-inner">
                                        <img class="img-fluid w-100 rounded-top" src="user/img/blog-<?= $event['kategori_id']; ?>.jpg" alt="Image">
                                        <div class="blog-icon">
                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div> --}}
                                    <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                        {{-- <small class="flex-fill text-center border-end py-2">
                                            <i class="fa fa-calendar-alt text-primary me-2"></i><?=// date('d M Y', strtotime($event['tanggal'])); ?>
                                        </small> --}}
                                        {{-- <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2">
                                            <i class="fa fa-thumbs-up text-primary me-2"></i>1.7K
                                        </a>
                                        <a href="#" class="btn-hover flex-fill text-center text-white py-2">
                                            <i class="fa fa-comments text-primary me-2"></i>1K
                                        </a> --}}
                                    </div>
                                </div>
                                <div class="blog-content border border-top-0 rounded-bottom p-4">
                                   
                                    <p class="mb-3"><?= htmlspecialchars($event->user->name); ?></p>
                                    <strong>
                                        <a style="font-size: 24px; font-weight: bold;" class="h1"><?= htmlspecialchars($event->kategori->nama_kategori); ?></a><br>
                                        <a style="font-size: 20px;" class="h3"><?= htmlspecialchars($event['judul']); ?></a>
                                        
                                </strong>
                                    <p class="my-3">tanggal: <?=  date('d M Y', strtotime($event['tanggal'])); ?></p>
                                    <p class="my-3">Waktu: <?= htmlspecialchars($event['waktu_mulai']) . ' - ' . htmlspecialchars($event['waktu_selesai']); ?></p>
                                    <p class="my-3">Lokasi: <?= htmlspecialchars($event['lokasi']); ?></p>
                                    {{-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                </div>
                </div>
                
        <!-- Blog End -->

        <!-- Packages Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">info penting</h5>
                    <h1 class="mb-0">info penting</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="user/img/packages-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3
                                    days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$349.00</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Venice - Italy</h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                    quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="user/img/packages-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3
                                    days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$449.00</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">The New California</h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                    quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="user/img/packages-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3
                                    days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$549.00</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Discover Japan</h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                    quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="user/img/packages-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Thayland</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3
                                    days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$649.00</div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Thayland Trip</h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia
                                    quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Packages End -->


        <!-- Contact Start -->
       <div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Contact Us</h5>
            <h1 class="mb-0">Contact For Any Query</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-4">
                <div class="bg-white rounded p-4">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                        <h4 class="text-primary">{{ $kontaks->first()->alamat ?? 'Address not available' }}</h4>
                        <p class="mb-0">{{ $kontaks->first()->alamat ?? 'Address not available' }}</p>
                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary">Mobile</h4>
                        @foreach($kontaks as $kontak)
                            <p class="mb-0">{{ $kontak->no_telp }}</p>
                        @endforeach
                    </div>
                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary">Email</h4>
                        @foreach($kontaks as $kontak)
                            <p class="mb-0">{{ $kontak->email }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="{{ route('kontak.storeuser') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="nama" class="form-control border-0" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control border-0" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="telepon" class="form-control border-0" id="phone" placeholder="Your Phone" required>
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control border-0" id="subject" placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="isi" class="form-control border-0" placeholder="Leave a isi here" id="isi" style="height: 160px" required></textarea>
                                <label for="isi">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Your Site Name</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    </div>
                </div>
            </div>  
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>
        
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