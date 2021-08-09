<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tap&Klik - Solusi Bisnis UMKM</title>

        <!-- Favicons -->
  <link href="landing-asset/img/favicon.png" rel="icon">
  <link href="landing-asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="landing-asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="landing-asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="landing-asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="landing-asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="landing-asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="landing-asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="landing-asset/css/style.css" rel="stylesheet">
    </head>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
        <img src="landing-asset/img/Logo-tapnklik.png" alt="">
    </a>

    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="/">Halaman Utama</a></li>
        <li><a class="nav-link scrollto" href="/about">Tentang Kami</a></li>
        <li><a class="nav-link scrollto" href="/leaderboard">Leaderboard</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Tinggal Tap dan Klik bisnis banyak yang melirik</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">Kami menyediakan platform all in one dengan menggabungan fitur sosial media dengan katalog produk dan pembelian layaknya fitur e-commerce. Tap&Klik dibangun untuk UMKM makanan</h2>
            <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                <a href="{{ route('register') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Ayo Mendaftar</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="landing-asset/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Mengapa Tap&Klik?</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <img src="landing-asset/img/values-1.png" class="img-fluid" alt="">
                    <h3>Efisiensi Bisnis</h3>
                    <p>Layanan integrasi pemasaran dan penjualan Produk yang lebih mudah dengan Tap&Klik!</p>
                </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up" data-aos-delay="400">
                    <img src="landing-asset/img/values-2.png" class="img-fluid" alt="">
                    <h3>Jangkau Pasar Yang Luas</h3>
                    <p>Dengan bantuan internet, bisnismu akan dengan mudah terdengar sampai ke calon konsumen.</p>
                </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up" data-aos-delay="600">
                    <img src="landing-asset/img/values-3.png" class="img-fluid" alt="">
                    <h3>Bagikan Cerita Bisnis</h3>
                    <p>Buat bisnis kamu menarik dengan cerita-cerita yang memikat konsumer, untuk menjaga ikatan antara bisnis dan konsumen.</p>
                </div>
                </div>
            </div>
        </div>

    </section><!-- End Values Section -->

    <section>
        <div class="container">
            <header class="section-header">
                <p>Leaderboard</p>
                <p style="font-size: 20px; font-weight: normal;">Bantu UMKM rekomendasimu dikenal khalayak luas dan kumpulkan poinnya <i class="bi bi-chevron-right"></i> <a href="/@test">Daftar Referral Program</a></p>
            </header>
            <div class="leaderboard-table" data-aos="fade-up" data-aos-delay="200">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No. Handphone</th>
                        <th scope="col">Total Poin</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>+6282xxxxx901</td>
                        <td>9012</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>+6282xxxxx901</td>
                        <td>901</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Wody</td>
                        <td>+6282xxxxx901</td>
                        <td>12</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

        <header class="section-header">
            <p>Apa kata mereka</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="testimonial-item">
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Test.
                </p>
                <div class="profile mt-auto">
                    <img src="landing-asset/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Penjual Sate</h4>
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-item">
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Test
                </p>
                <div class="profile mt-auto">
                    <img src="landing-asset/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Penjual Pentol Karisma</h4>
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-item">
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Test
                </p>
                <div class="profile mt-auto">
                    <img src="landing-asset/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Penjual Nasi Goreng</h4>
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-item">
                <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                    Test
                </p>
                <div class="profile mt-auto">
                    <img src="landing-asset/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Penjual Bakso</h4>
                </div>
                </div>
            </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>

    </section><!-- End Testimonials Section -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                <img src="landing-asset/img/Logo-tapnklik.png" alt="">
                </a>
                <p>Sebuah website socio e-commerce yang ditujukan untuk UMKM sebagai alat promosi dan penjualan barangnya dan memudahkan UMKM dalam menjalankan bisnisnya.</p>
                <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
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
            &copy; Copyright <strong><span>Tap&Klik</span></strong>. All Rights Reserved
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="landing-asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="landing-asset/vendor/aos/aos.js"></script>
    <script src="landing-asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="landing-asset/vendor/purecounter/purecounter.js"></script>
    <script src="landing-asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="landing-asset/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="landing-asset/js/main.js"></script>
    </body>
</html>
