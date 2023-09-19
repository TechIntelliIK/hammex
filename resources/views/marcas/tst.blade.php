@extends('layout')

@section('title', 'TST Sweden')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Marcas</a></li>
          <li>TST Sweden</li>
        </ol>
        <h2>TST Sweden</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/tst/tst-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/tst/tst-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/tst/tst-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/tst/tst-4.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/tst/tst-5.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/tst/tst-6.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="industrias d-none d-lg-block">
              <h3>Otras marcas</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('falch') }}">Falch</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('kranzle') }}">Kränzle</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('mach') }}">MACH</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>TST Sweden</h2>
              <p style="text-align: justify;">
                Desde su creación en Suecia en 1990 TST desarrolla equipos de protección con características técnicamente avanzadas, alto nivel de confort y alta calidad.
              </p>
              <h2>TST - Textil de seguridad técnica</h2>
              <p style="text-align: justify;">
                Productos desarrollados en estrecha colaboración con los usuarios finales. Siendo muy consciente de las necesidades de nuestros clientes y promoviendo un diálogo abierto, y proporcionando excelentes servicio y experiencia, crearemos relaciones a largo plazo con los clientes. Apuntaremos para una rentabilidad satisfactoria, tanto para nosotros como para nuestros clientes.
              </p>
              <h5>Amigables con el ambiente</h5>
              <p style="text-align: justify;">
                Su enfoque de calidad y medio ambiente reflejará nuestro compromiso con
                Mejora constante y medidas preventivas para prevenir lesiones personales y
                daño al medio ambiente. Nuestra declaración ambiental forma la base de nuestro trabajo diario cumpliremos con las leyes, ordenanzas, regulaciones y otros requerimientos. Y en sociedad con Hammex nuestros productos están disponibles en México para todas las empresas que necesitan  proteger a sus operadores.
              </p>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('falch') }}">Falch</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('kranzle') }}">Kränzle</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('mach') }}">MACH</a></strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection
