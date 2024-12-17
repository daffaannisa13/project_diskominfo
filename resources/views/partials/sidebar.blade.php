<?php
// Konfigurasi koneksi database
$host = 'localhost';
$dbname = 'diskominfo';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Query untuk mengambil logo_backend, alias, dan deskripsi dari tabel deskripsi_sistem
$query = "SELECT logo_backend, alias, deskripsi FROM deskripsi_sistem LIMIT 1";
$stmt = $pdo->query($query);
$deskripsiSistem = $stmt->fetch(PDO::FETCH_ASSOC);

// Menyimpan path logo_backend jika ada
$logoPath = $deskripsiSistem['logo_backend'] ?? null;
?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="display: flex; justify-content: center; align-items: center;">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo" style="text-align: center;">
                <!-- Menampilkan logo dari database atau default logo jika tidak ada -->
                <?php if ($logoPath): ?>
                    <img src="{{ asset('storage/' . $logoPath) }}" alt="Logo Backend" style="width: 60px; height: auto; display: block; margin: 0 auto;" />
                <?php else: ?>
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="width: 60px; height: auto; display: block; margin: 0 auto;" />
                <?php endif; ?>
            </span>
        </a>
    </div>
    <div class="app-info" style="text-align: center; padding-top: 5px;">
        <!-- Menampilkan alias jika ada -->
        <?php if (isset($deskripsiSistem['alias']) && !empty($deskripsiSistem['alias'])): ?>
            <p style="font-size: 14px; font-weight: bold; margin: 0;"><?php echo htmlspecialchars($deskripsiSistem['alias']); ?></p>
        <?php endif; ?>
        <!-- Menampilkan deskripsi jika ada -->
        <?php if (isset($deskripsiSistem['deskripsi']) && !empty($deskripsiSistem['deskripsi'])): ?>
            <p style="font-size: 12px; color: #666; margin: 0;"><?php echo htmlspecialchars($deskripsiSistem['deskripsi']); ?></p>
        <?php endif; ?>
    </div>


    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ url('/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Pengguna -->
        <li class="menu-item">
            <a href="{{ url('/users') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Pengguna</div>
            </a>
        </li>

        <!-- Profil -->
        <li class="menu-item dropdown">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-id-card"></i>
                <div>Profil</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('/profil') }}" class="menu-link">
                        <div>Profil</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Galeri -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div>Galeri</div>
            </a>
            <ul class="menu-sub">
                <!-- Gambar Submenu -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div>Gambar</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ url('/kategori-gambar') }}" class="menu-link">
                                <div>Kategori Gambar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/gambar') }}" class="menu-link">
                                <div>Daftar Gambar</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Video Submenu -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div>Video</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ url('/galeri/video/kategori') }}" class="menu-link">
                                <div>Kategori Video</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/video') }}" class="menu-link">
                                <div>Daftar Video</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>



        <!-- Berita -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div>Berita</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('/kategori-berita') }}" class="menu-link">
                        <div>Kategori Berita</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/berita') }}" class="menu-link">
                        <div>Daftar Berita</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i> <!-- Updated icon for Informasi -->
                <div>Informasi</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div>Agenda</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ url('/kategori-agenda') }}" class="menu-link">
                                <div>Kategori Agenda</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/agenda') }}" class="menu-link">
                                <div>Daftar Agenda</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div>Dokumen</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ url('/dokumen-kategori') }}" class="menu-link">
                                <div>Kategori Dokumen</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/dokumen') }}" class="menu-link">
                                <div>Daftar Dokumen</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- Deskripsi Sistem -->
<li class="menu-item">
    <a href="{{ url('/deskripsi-sistem') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book-open"></i> <!-- Updated icon -->
        <div>Deskripsi Sistem</div>
    </a>
</li>

<!-- Layanan -->
<li class="menu-item">
    <a href="{{ url('/layanan') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cog"></i> <!-- Updated icon -->
        <div>Layanan</div>
    </a>
</li>



        <li class="menu-item">
            <a href="{{ url('/bidang') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i> <!-- Anda bisa mengganti ikon sesuai keinginan -->
                <div>Bidang</div>
            </a>
        </li>

       {{-- Hubungi Kami --}}
<li class="menu-item">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-phone"></i> 
    <div>Hubungi Kami</div>
  </a>
  <ul class="menu-sub">
    <!-- Pesan -->
    <li class="menu-item">
      <a href="{{ url('/pesan') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-envelope"></i>
        <div>Pesan</div>
      </a>
    </li>
    <!-- Kontak -->
    <li class="menu-item">
      <a href="{{ url('/kontak') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i> <!-- Contact icon -->
        <div>Kontak</div>
      </a>
    </li>
    <!-- Sosial Media -->
    <li class="menu-item">
      <a href="{{ url('/sosial-media') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-share-alt"></i>
        <div>Sosial Media</div>
      </a>
    </li>
  </ul>
</li>



    </ul>
</aside>


<script>
    document.querySelectorAll('.menu-toggle').forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            const subMenu = this.nextElementSibling;
            subMenu.classList.toggle('collapse'); // Toggle the 'collapse' class
            subMenu.classList.toggle('show'); // Show the menu on click
        });
    });
    
</script>
<style>
    .menu-sub.collapse {
        display: none;
    }

    .menu-sub.show {
        display: block;
    }
</style>
