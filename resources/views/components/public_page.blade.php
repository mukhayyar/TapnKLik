@props(['active' => false])
@props(['active1' => false])
@props(['active2' => false])
@props(['active3' => false])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tap&Klik - Solusi Bisnis UMKM</title>

        <!-- Favicons -->
  <link href="/landing-asset/img/favicon.png" rel="icon">
  <link href="/landing-asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <!-- Vendor CSS Files -->
  <link href="/landing-asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/landing-asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/landing-asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="/landing-asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/landing-asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/landing-asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Template Main CSS File -->
  <link href="/landing-asset/css/style.css" rel="stylesheet">
    </head>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center">
        <img src="landing-asset/img/Logo-tapnklik.png" alt="">
    </a>

    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto {{ $active ? "active" : '' }}" href="/">Halaman Utama</a></li>
        <li><a class="nav-link scrollto {{ $active1 ? "active" : '' }}" href="/about">Tentang Kami</a></li>
        <li><a class="nav-link scrollto {{ $active2 ? "active" : '' }}" href="/daftar_umkm">Cari UMKM</a></li>
        <li><a class="nav-link scrollto {{ $active3 ? "active" : '' }}" href="/leaderboard">Leaderboard</a></li>
        @if (Route::has('login'))
        @auth
            <li><a class="getstarted scrollto" href="{{ url('/dashboard') }}">Dasbor</a></li>
            @else
                <li><a class="nav-link scrollto" href="{{ route('login') }}">Masuk</a></li>
                @if (Route::has('register'))
                    <li><a class="getstarted scrollto" href="{{ route('register') }}">Ayo Mendaftar</a></li>
                @endif
            @endauth
        @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  {{$slot}}

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="/" class="logo d-flex align-items-center">
                <img src="landing-asset/img/Logo-tapnklik.png" alt="">
                </a>
                <p>Sebuah website socio e-commerce yang ditujukan untuk UMKM sebagai alat promosi dan penjualan barangnya dan memudahkan UMKM dalam menjalankan bisnisnya.</p>
                <div class="social-links mt-3">
                <a href="https://www.instagram.com/smktelkom_du/" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Tautan Penting</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Halaman Utama</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang Kami</a></li>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Layanan Kami</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">All in One Platform</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Kontak Kami</h4>
                <p>
                SMK Telekomunikasi Darul 'Ulum' <br>
                Komplek Pondok Pesantren Darul Ulum<br>
                Jombang, Jawa Timur, Indonesia <br><br>
                <strong>Phone:</strong> +62 821 3347 3078<br>
                <strong>Email:</strong> m3g3nz2@gmail.com<br>
                </p>

            </div>

            </div>
        </div>
        </div>

        <div class="container">
        <div class="copyright">
           Made with ❤ by <strong><span>Santri Njoso</span></strong>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/landing-asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/landing-asset/vendor/aos/aos.js"></script>
    <script src="/landing-asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/landing-asset/vendor/purecounter/purecounter.js"></script>
    <script src="/landing-asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/landing-asset/vendor/glightbox/js/glightbox.min.js"></script>
    
    <!-- Template Main JS File -->
    <script src="/landing-asset/js/main.js"></script>
    </body>
</html>
