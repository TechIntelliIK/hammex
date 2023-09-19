@extends('layout')

@section('title', 'Falch')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Marcas</a></li>
          <li>Falch</li>
        </ol>
        <h2>Falch</h2>
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
                  <img src="{{ asset('img/marcas/falch/falch-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/falch/falch-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/falch/falch-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/falch/falch-4.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/falch/falch-5.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/falch/falch-6.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/falch/falch-7.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="industrias d-none d-lg-block">
              <h3>Otras marcas</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('kranzle') }}">Kranzle</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('tst') }}">TST</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('mach') }}">MACH</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>Falch</h2>
              <p style="text-align: justify;">
                Con el paso del tiempo, falch gmbh ha trabajado en numerosos procesos de trabajo innovadores y áltamente tecnológicos. esto ha llevado a la compañía a cosechar grandes éxitos, al igual que ha ocurrido con todos sus clientes. además, en lo que a competencia práctica se refiere, existen muchos otros aspectos que están muy cercanos a nuestro corazón. estos incluyen: un positivo trato de los recursos humanos, clientes, empleados y proveedores, tanto delante como detrás de la escena pública.
              </p>
              <p style="text-align: justify;">
                Competencia en la aplicación de chorro de agua a presión. <br><br>
                En falch, el objetivo es conseguir las mejores y más rápidas máquinas, más económicas y más cuidadosas con el medio ambiente. esto se ha conseguido aplicando día a día todos nuestros recursos energéticos con el objetivo de conseguir la satisfacción de todos los clientes.
              </p>
              <h4>¿Quién más puede ofrecer esto?</h4>
              <p style="text-align: justify;">
                En sociedad con Hammex en México, vendemos productos y damos capacitación para su correcta utilización,  orientado directamente a la obtención de mejoras.
              </p>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras marcas</h3>
              <ul>
                li><strong><i class="bx bx-check"></i> <a href="{{ route('kranzle') }}">Kranzle</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('tst') }}">TST</a></strong></li>
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
