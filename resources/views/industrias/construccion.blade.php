@extends('layout')

@section('title', 'Construcción')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Industrias</a></li>
          <li>Construcción</li>
        </ol>
        <h2>Industria Construcción</h2>
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
                  <img src="{{ asset('img/industrias/construccion/Construccion.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/construccion/Construccion-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/construccion/Construccion-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/construccion/Construccion-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/construccion/Construccion-4.webp') }}" alt="">
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
              <h2>Usos de las Hidrolavadoras en la industria construcción</h2>
              <p style="text-align: justify;">
                Mantenga sus herramientas de construcción limpias y limpie el polvo y los escombros.
              </p>
              <h2>Reto</h2>
              <p style="text-align: justify;">
                Los gerentes de edificación y construcción están eligiendo las máquinas de limpieza para ayudar a mantener sus demás herramientas y equipo. Al mantener sus herramientas limpias ayuda a mejorar la productividad. Y en algunas partes del negocio, ellos necesitan eliminar tipos específicos de suciedad y polvo como parte del proceso de edificación.
              </p>
              <h2>Solución</h2>
              <p style="text-align: justify;">
                Las máquinas de limpieza industrial  de venta en Hammex están diseñadas para operar en condiciones particularmente difíciles. Son fiables y duraderas, y cuentan con todas las características necesarias para operar en condiciones muy difíciles
              </p>
              <ul>
                <li>Servicio Público, Sector de la construcción</li>
                <li>Ingeniería civil</li>
                <li>Cuerpo de bomberos</li>
                <li>Servicios de Urgencias</li>
                <li>Municipios</li>
                <li>Sector ferroviario </li>
              </ul>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('avicola') }}">Avícola</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
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
