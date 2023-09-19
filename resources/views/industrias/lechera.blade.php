@extends('layout')

@section('title', 'Lechera')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Industrias</a></li>
          <li>Lechera</li>
        </ol>
        <h2>Industria Lechera</h2>
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
                  <img src="{{ asset('img/industrias/lechera/lechera.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/lechera/lechera-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/lechera/lechera-2.webp') }}" alt="">
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
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('ganadera') }}">Ganadera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('petroquimica') }}">Petroquímica</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('porcina') }}">Porcina</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>Usos de las Hidrolavadoras en la industria Lechera</h2>
              <p style="text-align: justify;">
                La leche es uno de los alimentos más importantes para consumo humano. El proceso de ordeña es un proceso donde la higiene es fundamental para poder garantizar la salubridad y poder habilitar su consumo.
              </p>
              <h2>Reto</h2>
              <p style="text-align: justify;">
                Mantener instalaciones limpias y desinfectadas, es una tarea constante, en la cual, es de vital importancia contar con los elementos y herramientas necesarias para generar una limpieza profunda que cubra las normas de salubridad.
              </p>
              <h2>Solución</h2>
              <p style="text-align: justify;">
                Las Hidrolavadoras de la familia Hammex son la mejor solución para esta tarea. Con un rango de presión 1,000 a 3,200 psi, con opción a modelos con agua caliente de hasta 150°C y accesorios especializados. Permiten una aplicación profunda y efectiva., reduciendo tiempos de mantenimiento y garantizando una calidad superior de limpieza. <br><br>
                Tecnología Alemana de la más alta calidad garantizada. Acérquese a nuestros especialistas para obtener una recomendación o diseño del paquete más adecuado para su proceso, al precio mas justo. <br><br>
                Salvaguarde su inversión mediante materiales de máxima duración (USO 24 / 7) y el respaldo de técnicos mexicanos especializados para brindar a usted una respuesta efectiva..
              </p>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('avicola') }}">Avícola</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('ganadera') }}">Ganadera</a></strong></li>
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
