<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/icon.webp') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

  @include('partials.nav')
  @yield('content')
  @include('partials.contact')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>HAMMEX</h3>
            <p>
              <a href="https://www.google.com.mx/maps/place/Hidrolavadoras+Industriales/@19.5903947,-99.2772379,17z/data=!3m1!4b1!4m5!3m4!1s0x85d202d4bbcee8a7:0xc3bc607534c17cf!8m2!3d19.5903897!4d-99.2750492"
                target="_blank">
                Guerrero 35, <br> Col. Los Olivos, <br> 54055 Cd López Mateos, Méx. <br><br>
              </a>

              <strong>Número Teléfonico:</strong><a href="tel:+525555757492"> (+52) 55-55-75-74-92</a><br>
              <strong>Correo Electrónico:</strong><a href="mailto:ventas@hammex.mx"> ventas@hammex.mx</a><br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Enlaces útiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#hero">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#about">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#services">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#industrias">Industrias</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#marcas">Marcas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#portfolio">Equipos</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes Sociales</h4>
            <p>Visita nuestras redes sociales para estar al tanto de nuestras promociones y noticias.</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/mtobombas" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/hidrolavadorashammex/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/hammex_mx/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCCFtI3qPlxFJhR2HxAAcqfw" target="_blank" class="google-plus"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.linkedin.com/company/hammex/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Hidrolavadoras Hammex 2022</span></strong>.
      </div>
      <div class="credits">
        Hammex Expertos en Hidrolavadoras de Alta Presión
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
