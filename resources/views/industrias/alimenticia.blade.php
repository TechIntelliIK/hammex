@extends('layout')

@section('title', 'Alimenticia')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Industrias</a></li>
          <li>Alimenticia</li>
        </ol>
        <h2>Industria Alimenticia</h2>
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
                  <img src="{{ asset('img/industrias/alimenticia/Alimenticia.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/alimenticia/Alimenticia-1.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="industrias d-none d-lg-block">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
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
              <h2>Usos en la industria Alimenticia</h2>
              <p style="text-align: justify;">
                Las soluciones Hammex se usan en compañías de alimentos para mejorar la eficiencia de la producción, incrementar la seguridad y mantener un alto nivel de higiene.
              </p>
              <h2>Reto</h2>
              <p style="text-align: justify;">
                El equipamiento con compatibilidad alimentaria que consiste en neumáticos y mangueras especiales y fabricación en acero inoxidable es condición indispensable, lo mismo que para la limpieza de fachadas lo crucial es disponer de elevada presión y caudal de agua.
              </p>
              <h2>Solución</h2>
              <p style="text-align: justify;"><strong>Ejemplos de aplicación, limpieza</strong></p>
              <ul>
                <li>Limpieza de bandejas para hornear</li>
                <li>Limpieza de maquinaria</li>
                <li>Limpieza de Tanques</li>
                <li>Limpieza de tuberías e intercambiadores de calor</li>
                <li>Limpieza de de transportadores y pisos</li>
                <li>Limpieza de las torres de aspersión</li>
                <li>Limpieza de los rodillos de distribución, líneas de procesamiento de remolacha, líneas de alimentación</li>
                <li>Limpieza de pozos de agua minerales</li>
                <li>Limpieza de tonel colador de malta, filtros, calderas de cobre, toneles y tinas de puré, refrigeradores, máquinas de llenado, lavadoras de botellas y equipo de transporte</li>
                <li>Descarillado de barriles de cerveza</li>
                <li>Limpieza de estanques, calderas</li>
                <li>La eliminación de ingredientes de la pintura y etiquetas adhesivas</li>
              </ul>
              <p style="text-align: justify;"><strong>Ejemplos de aplicación, procesado de comida:</strong></p>
              <ul>
                <li>Extracción de CO2 de plantas, ej. Aroma de las especies, lecitina de granos de soja</li>
                <li>Corte de comidas congeladas</li>
                <li>Corte de pescado, pastas, etc.</li>
              </ul>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
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
