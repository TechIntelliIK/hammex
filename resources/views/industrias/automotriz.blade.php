@extends('layout')

@section('title', 'Automotriz')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Industrias</a></li>
          <li>Automotriz</li>
        </ol>
        <h2>Industria Automotriz</h2>
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
                  <img src="{{ asset('img/industrias/automotriz/Automotriz.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/automotriz/Automotriz-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/automotriz/Automotriz-2.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="industrias d-none d-lg-block">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('avicola') }}">Avícola</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('ganadera') }}">Ganadera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('lechera') }}">Lechera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('petroquimica') }}">Petroquímica</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('porcina') }}">Porcina</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>Usos de las Hidrolavadoras en la industria automotriz</h2>
              <p style="text-align: justify;"><strong>Aumente la limpieza y mejore la productividad</strong></p>
              <p style="text-align: justify;">
                Es más fácil vender vehículos en un ambiente agradable y limpio, donde las salas de exposición están limpias y brillantes. Y los clientes no sólo juzgan su sala de exposición: también van a talleres de reparación, donde la acumulación de manchas difíciles y grasa requieren potentes soluciones de limpieza.
              </p>
              <h2>Reto</h2>
              <p style="text-align: justify;">
                La elección de la hidrolimpiadora de alta presión correcta con una buena relación de alta presión y elevado caudal de agua es imprescindible.
              </p>
              <h2>Solución</h2>
              <p style="text-align: justify;">
                Más allá de la limpieza necesaria en los procesos de trabajo, los equipos de alta presión de agua pueden usarse también en:
              </p>
              <p style="text-align: justify;"><strong>Ejemplos de aplicación, limpieza</strong></p>
              <ul>
                <li>Remoción plana de rebaba y limpieza de bloque motor</li>
                <li>Remoción de rebaba de cilindros</li>
                <li>Remoción de pintura de rejillas de cabinas de pintura</li>
                <li>Remoción de núcleos de fundición de bloques del motor, culatas, cajas de transmisión y manifolds de succión.</li>
                <li>Trabajo de corte, sellos, revestimientos</li>
                <li>Reprocesando bloques de motor, carrocerías</li>
                <li>Recuperación de reflectores de calaveras que fallaron pruebas de control de calidad</li>
                <li>Limpieza de costuras de soldadura</li>
              </ul>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('avicola') }}">Avícola</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('ganadera') }}">Ganadera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('lechera') }}">Lechera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('petroquimica') }}">Petroquímica</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('porcina') }}">Porcina</a></strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection
