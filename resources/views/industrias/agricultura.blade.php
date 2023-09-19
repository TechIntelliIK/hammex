@extends('layout')

@section('title', 'Agricultura')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Industrias</a></li>
          <li>Agricultura</li>
        </ol>
        <h2>Industria Agrícola</h2>
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
                  <img src="{{ asset('img/industrias/agricultura/Agricultura.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Agricultura-1.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Agricultura-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Agricultura-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Agricultura-4.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Agricultura-5.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Agricultura-6.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/industrias/agricultura/Agricultura-8.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="industrias d-none d-lg-block">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
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
              <h2>Usos en la industria Agrícola</h2>
              <p style="text-align: justify;">
                Ofrecemos productos que le ayudan a satisfacer sus necesidades de limpieza diarias, desde lavadoras a presión hasta sistemas de aspiración y equipos de cuidado de piso, ya sean móviles o estacionarios.
              </p>
              <h2>Reto</h2>
              <p style="text-align: justify;">
                El trabajo en el campo siempre se relaciona con la tierra y la suciedad. Es inevitable no llenarse de polvo cuando se trabaja en el campo. No obstante, la higiene es un factor que no se debe descuidar, muy importante en el mundo agrícola es  la limpieza en los sitios donde se crían animales. El agua es fundamental para que estos espacios se mantengan limpios y libres de infecciones.
              </p>
              <h2>Solución</h2>
              <p style="text-align: justify;">
                Nuestros equipos y sistemas desarrollados a medida de sus necesidades, garantizan la eliminación de materia indeseada (suciedad) de cualquier superficie interior y exterior: Maquinaria, parque movil, establos, instalaciones, edificios, algunas ventajas de nuestros equipos son:
              </p>
              <ul>
                <li>Potencia alta del motor a bajas revoluciones.</li>
                <li>Presión y flujo altos.</li>
                <li>Materiales resistentes al agua (Laton y Acero inoxidable).</li>
                <li>Baja fricción (Cojinetes de alta calidad y diámetros grandes).</li>
                <li>Poco desgaste en materiales.</li>
                <li>Seguridad de operación en seco.</li>
                <li>Válvula by-pass.</li>
                <li>Apto para operación continua.</li>
                <li>Control eléctrico inteligente. (parada total y demora de parada).</li>
                <li>Soluciones constructivas contra error de operación (tanque de agua con flotador).</li>
              </ul>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras industrias</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
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
