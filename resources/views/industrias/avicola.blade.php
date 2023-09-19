@extends('layout')

@section('title', 'Avícola')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Industrias</a></li>
          <li>Avícola</li>
        </ol>
        <h2>Industria Avícola</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="738" height="550" src="https://www.youtube.com/embed/skuUE2s4oZ8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            {{-- <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Sector-Agricultura1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Sector-Agricultura2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Sector-Agricultura3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Sector-Agricultura4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div> --}}
            <div class="industrias d-none d-lg-block">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
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
              <h2>Usos de las Hidrolavadoras en la industria Avícola</h2>
              <p style="text-align: justify;">
                Las superficies que tienen contacto con animales y materia orgánica deben desinfectarse, es una forma de lucha contra enfermedades causadas por bacterias y virus. La limpieza precede a la desinfección y es de extrema importancia, ya que asegura la eficacia de la desinfección.
              </p>
              <h2>Reto</h2>
              <p style="text-align: justify;">
                Por la complejidad del proceso el personal encargado de la desinfección debe recibir una formación sobre los procedimientos que garanticen seguridad del uso de equipos de alta presión.
              </p>
              <h2>Solución</h2>
              <p style="text-align: justify;">
                Limpieza e superficies con equipos de alta presión de agua fría o caliente según las necesidades de la empresa
              </p>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
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
