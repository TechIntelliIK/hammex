@extends('layout')

@section('title', 'Kränzle')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="#">Marcas</a></li>
          <li>Kränzle</li>
        </ol>
        <h2>Kränzle</h2>
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
                  <img src="{{ asset('img/marcas/kranzle/kranzle-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/kranzle/kranzle-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/marcas/kranzle/kranzle-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="industrias d-none d-lg-block">
              <h3>Otras marcas</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('falch') }}">Falch</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('tst') }}">TST</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('mach') }}">MACH</a></strong></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>Kränzle</h2>
              <p style="text-align: justify;">
                Desde hace más de 40 años, el nombre de Kränzle es sinónimo de máxima calidad, capacidad de inno- vación y gran conciencia ecológica.
              </p>
              <h2>Lo que debes saber de Kränzle</h2>
              <p style="text-align: justify;">
                Desde Alemania trabajan continuamente en innovaciones que ofrezcan soluciones convincentes para las exigencias mundiales del sector de la limpieza. Materiales de alta calidad, tecnologías sofisticadas y profesionales expertos son los pilares a partir de los que la marca Kränzle se ha convertido en un líder mundial de calidad en máquinas limpiadoras. <br><br>
                Socio aliado de Hammex y como equipo, superamos nuestros límites día a día con el objetivo de ofrecer a nuestros clientes de todo el mundo importantes impulsos para lograr nuevos desarrollos , mejoras de productos y comercialización en México.
              </p>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Equipos de agua fría
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p style="text-align: justify;">
                        El núcleo de cualquier hidrolimpiadora de alta presión es la bomba de alta presión. Para ofrecer la máxima calidad  y durabilidad, se utiliza exclusivamente latón especial forjado para los cabezales de la bomba. <br><br>
                        La elevadísima precisión y exactitud dimensional de las bombas se aseguran mediante una fabricación completa en centros de mecanizado controlados por CNC y controles de medida electrónicos. El paquete de tecnología se completa mediante una gran variedad de detalles que en suma marcan la diferencia en rendimiento, seguridad y durabilidad.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Equipos de agua caliente
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p style="text-align: justify;">
                        Las hidrolimpiadoras de alta presión con agua caliente Kränzle-therm combinan una gran variedad de innovaciones técnicas. Estas proporcionan el máximo rendimiento, fiabilidad, seguridad y confort de manejo en el uso diario. El rendimiento ajustable del quemador en temperatura y rendimiento porcentual según especificaciones nominales es uno de lo mayores avances técnicos de la serie Kränzle-therm. La supervisión óptica de la llama, el contador de horas de servicio y los numerosos dispositivos de seguridad convierten a los productos de la serie Kränzle-therm en absolutamente seguros para el funcionamiento, respetuosos con el medio ambiente, limpios y silenciosos. <br><br>
                        Con la tecnología de Kränzle ahorrará agua y energía: y todo ello con una máxima eficacia de limpieza.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accesorios
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p style="text-align: justify;">
                        Las hidrolimpiadoras de alta presión con agua caliente Kränzle-therm combinan una gran variedad de innovaciones técnicas. Estas proporcionan el máximo rendimiento, fiabilidad, seguridad y confort de manejo en el uso diario. El rendimiento ajustable del quemador en temperatura y rendimiento porcentual según especificaciones nominales es uno de lo mayores avances técnicos de la serie Kränzle-therm. La supervisión óptica de la llama, el contador de horas de servicio y los numerosos dispositivos de seguridad convierten a los productos de la serie Kränzle-therm en absolutamente seguros para el funcionamiento, respetuosos con el medio ambiente, limpios y silenciosos. <br><br>
                        Con la tecnología de Kränzle ahorrará agua y energía: y todo ello con una máxima eficacia de limpieza
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-info d-lg-none">
              <h3>Otras marcas</h3>
              <ul>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('falch') }}">Falch</a></strong></li>
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
