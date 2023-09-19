@extends('layout')

@section('title', 'M830')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M830</li>
        </ol>
        <h2>M830</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m830/m830-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m830/m830-2.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M830</h3>
              <h5>Un cuerpo compacto que impulsa un cepillo ancho</h5>
              <p style="text-align: justify;">
                La versátil M830, una fregadora de operador sentado de alto rendimiento con un diseño compacto y una amplia trayectoria de limpieza que ofrece una productividad impresionante sin comprometer la maniobrabilidad. El resultado es una máquina adaptada para navegar en espacios congestionados y abordar grandes áreas, lo último en todoterreno a un precio extremadamente competitivo.
              </p>
              <h5>CAMPOS DE APLICACIÓN</h5>
              <p style="text-align: justify;">
                Sitios industriales, comunidades y cercanías, escuelas, oficinas, edificios religiosos, hospitales, edificios públicos, aeropuertos, puertos, centros comerciales, depósitos logísticos, empresas de limpieza y multiservicios.
              </p>
              <h5>SUPERFICIES DE LIMPIEZA ADECUADAS</h5>
              <p style="text-align: justify;">
                Cerámica, mármol, cemento/hormigón, linóleo, superficies antideslizantes, porcelanato y muchas otras condiciones de suciedad.
              </p><br>
              <ul>
                <li><button type="button" class="btn btn-outline-success col-12" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver datos técnicos</button></li>
                <li><a href="#contact" class="btn btn-primary col-12">Solicitar Cotización</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos técnicos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Tabla de datos técnicos
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped align-middle">
                                          <thead>
                                              <tr>
                                                  <th scope="col">Característica</th>
                                                  <th scope="col">M830</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>830 mm / 32 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>4.980 m² / 53.605 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>125 L / 33 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>110 L / 29,1 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuerza</th>
                                                  <td>24V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>asistido electrónicamente</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>6 km/h / 3,7 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Batería</th>
                                                  <td>4x6 V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Cargador de batería</th>
                                                  <td>a bordo</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (incluyendo batería y cargador)</th>
                                                  <td>357 kg / 787 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma)</th>
                                                  <td>1425 x 840 x 1243 mm / 56,1 x 33,1 x 48,9 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ancho de la escobilla de goma</th>
                                                  <td>1,040 mm/40,9 pulgadas</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Descripción
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div>
                                    <h5>La nueva restregadora automática de operador a bordo de 830 mm / 32 pulgadas que es completamente mecánica.</h5>
                                    <p style="text-align: justify;">
                                      La máquina definitiva de la serie compacta de MACH con asiento, la M830 tiene un recorrido de limpieza de 830 mm / 32 pulgadas y ofrece una capacidad de limpieza de 4980 m²/hora o 53 600 pies²/hora. Está diseñado para ser increíblemente eficiente desde el punto de vista energético, maximizando el tiempo de actividad general y permitiendo una alta productividad. El M830 es la solución económica para fregar y secar rápida y eficazmente grandes superficies de suelo, mientras que el diseño compacto garantiza una alta maniobrabilidad y un manejo ligero en espacios reducidos. <br><br>
                                      El M830 se adapta al operador, equipado con funciones manuales innovadoras que son simples y confiables. Es intuitivo de usar y altamente eficiente, sin la molestia del mantenimiento. El cabezal de cepillo doble de alta resistencia brinda un poder de limpieza concentrado al piso, sin importar la superficie, y la escobilla de goma parabólica limpia y seca completamente los pisos en una sola pasada, garantizando resultados perfectos en todo momento. La fregadora-secadora verdaderamente versátil que puede acceder a todas las áreas, brindando una limpieza poderosa donde sea necesario. <br><br>
                                      Disponible en acero inoxidable para entornos especialmente duros.
                                    </p>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
  </main><!-- End #main -->

@endsection