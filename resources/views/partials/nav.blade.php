<!-- ======= Header ======= -->
  <header id="header" class="fixed-top {{ setNavbarBg($_SERVER['REQUEST_URI']) }}">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="{{ route('home') }}"><img src="{{ asset('img/Hammex-expertos-en-hidrolavadoras-logo-oficial.webp') }}" alt="" class="img-fluid"></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#slider">Inicio</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#about">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#services">Servicios</a></li>
          <li class="dropdown"><a href="#"><span>Industrias</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('agricultura') }}">Agricultura</a></li>
              <li><a href="{{ route('alimenticia') }}">Alimenticia</a></li>
              <li><a href="{{ route('automotriz') }}">Automotriz</a></li>
              <li><a href="{{ route('avicola') }}">Avícola</a></li>
              <li><a href="{{ route('construccion') }}">Construcción</a></li>
              <li><a href="{{ route('ganadera') }}">Ganadera</a></li>
              <li><a href="{{ route('lechera') }}">Lechera</a></li>
              <li><a href="{{ route('limpiezag') }}">Limpieza General</a></li>
              <li><a href="{{ route('petroquimica') }}">Petroquímica</a></li>
              <li><a href="{{ route('porcina') }}">Porcina</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#marcas"><span>Marcas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('falch') }}">Falch</a></li>
              <li><a href="{{ route('kranzle') }}">Kränzle</a></li>
              <li><a href="{{ route('tst') }}">Tst Sweden</a></li>
              <li><a href="{{ route('mach') }}">Mach</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ setActive($_SERVER['REQUEST_URI']) }}" href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li><a class="getstarted scrollto" href="#contact"><i class="bx bx-phone-call"></i>&nbsp;Contáctanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
