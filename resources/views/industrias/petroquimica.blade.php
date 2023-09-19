@extends('layout')

@section('title', 'Petroquímica')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Industrias</a></li>
          <li>Petroquímica</li>
        </ol>
        <h2>Industria Petroquímica</h2>
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
                  <img src="{{ asset('img/industrias/petroquimica/Petroquimica.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/petroquimica/Petroquimica-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/petroquimica/Petroquimica-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/petroquimica/Petroquimica-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/petroquimica/Petroquimica-4.webp') }}" alt="">
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
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('lechera') }}">Lechera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('porcina') }}">Porcina</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>Usos de las Hidrolavadoras en la industria Petroquímica</h2>
              <p style="text-align: justify;">
                Incremente su productividad con entornos limpios, estériles y libres de vapores tóxicos  para mejorar la eficiencia en todos los procesos de trabajo.
              </p>
              <h2>Reto</h2>
              <p style="text-align: justify;">
                La limpieza y esterilización de los entornos de producción química juegan un papel importante no solo para la seguridad, sino en la eficiencia y eficacia de la producción. Además algunas maquinas pueden usarse para hacer cortes y limpieza de superficies profundas.
              </p>
              <h2>Solución</h2>
              <p style="text-align: justify;"><strong>Las hidrolavadoras y bombas de alta presión pueden usarse:</strong></p>
              <ul>
                <li>Limpieza interna de autoclaves, reactores, recipientes presurizados, tanques agitadores, tanques de almacenamiento de aceite, torres de destilación</li>
                <li>Limpieza de unidades de filtración, tambores de condensado, calderas, evaporadores, bandejas de espuma, filtros de aire, mezcladores, secadores, barriles</li>
                <li>Limpieza de intercambiadores de calor y refrigerador de proceso</li>
                <li>Descontaminación y desinfección</li>
                <li>Limpieza de tuberías, los desagües</li>
                <li>Limpieza de columnas de pulverización, torres Prill etc.</li>
                <li>Vasos de pruebas de presión, tuberías y válvulas</li>
                <li>Limpieza de equipo de producción y el transporte, centros de mecanizado, talleres, áreas de estacionamiento</li>
                <li>Corte abrasivo con agua en zonas peligrosas</li>
              </ul>
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
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('lechera') }}">Lechera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
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
