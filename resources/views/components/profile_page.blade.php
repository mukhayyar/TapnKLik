
<!DOCTYPE html>
<html>
<head>
  <title>-</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="/new-asset/lib/animate/animate.min.css" rel="stylesheet">
<link href="/new-asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="/new-asset/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Template Stylesheet -->
<link href="/new-asset/css/style.css" rel="stylesheet">
<link href="/new-asset/css/style1.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/landing-asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

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
        <li><a class="nav-link scrollto active" href="/">Halaman Utama</a></li>
        <li><a class="nav-link scrollto" href="/about">Tentang Kami</a></li>
        <li><a class="nav-link scrollto" href="/cari_umkm">Cari UMKM</a></li>
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
<body>

{{$slot}}
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="/new-asset/lib/easing/easing.min.js"></script>
        <script src="/new-asset/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="/new-asset/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="/new-asset/lib/lightbox/js/lightbox.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
      });
    });
</script>
</body>
</html>
