@extends('layout')

@section('title', 'MACH')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Marcas</a></li>
          <li>MACH</li>
        </ol>
        <h2>MACH</h2>
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
                  <img src="{{ asset('img/marcas/mach/mach.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/mach/mach-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/mach/mach-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/mach/mach-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/mach/mach-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="industrias d-none d-lg-block">
              <h3>Otras marcas</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('falch') }}">Falch</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('kranzle') }}">Kränzle</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('tst') }}">TST</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>MACH</h2>
              <p style="text-align: justify;">
                MACH es una marca italiana de barredoras y fregadoras con sede en Cittadella (PD), Italia.
              </p>
              <h2>Productos Certificados</h2>
              <p style="text-align: justify;">
                Como soicos con HAMMEX los productos de MACH están fabricados para cumplir con los principales estándares internacionales, incluido el estándar europeo EN, así como otros estándares relevantes para cada tipo de producto. Sus productos han sido probados de forma independiente y certificados según los estándares anteriores. <br> <br>

                Sus inversiones continuas en tecnología de fabricación de vanguardia han significado que todos sus productos cumplan con los más altos estándares de calidad. Estan totalmente equipados para llevar a cabo internamente el corte/doblado de chapa, la soldadura y el diseño paramétrico de sus productos.
              </p>
              <h5>Misión</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>FABRICACIÓN DE ALTA CALIDAD</li>
                  <li>INVESTIGACIÓN Y DESARROLLO INCONTINUOS</li>
                  <li>SERVICIO POSTVENTA Y ATENCIÓN AL CLIENTE</li>
                </ul>
              </p>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('falch') }}">Falch</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('kranzle') }}">Kränzle</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('tst') }}">TST</a></strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection
