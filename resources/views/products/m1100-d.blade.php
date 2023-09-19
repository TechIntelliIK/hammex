@extends('layout')

@section('title', 'M1100 D')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M1100 D</li>
        </ol>
        <h2>M1100 D</h2>
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
                  <img src="{{ asset('img/portfolio/m1100d/m1100d-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m1100d/m1100d-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m1100d/m1100d-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M1100 D</h3>
              <h5>Poder de limpieza total en movimiento</h5>
              <p style="text-align: justify;">
                La M1100 D de servicio pesado es una fregadora automática de conductor sentado que ofrece un rendimiento excepcional en cualquier entorno. Equipada con el innovador MACH ECOsystem®, la M1100 D recicla agua y productos químicos durante el funcionamiento, aumentando la capacidad de limpieza hasta tres veces. Resultados perfectos en una sola pasada.
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
                                                  <th scope="col">M1100 D (discos)</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>1100 mm / 42 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>8.800 m² / 94.720 ft² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>240 L / 63,4 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>220 L / 58,1 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuerza</th>
                                                  <td>36 V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>asistido electrónicamente</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>8 km/h / 5 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Batería</th>
                                                  <td>1x36V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Cargador de batería</th>
                                                  <td>a bordo</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (incluyendo batería y cargador)</th>
                                                  <td>1.160 kg / 2557 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma) (largo x ancho x alto)</th>
                                                  <td>1.940 x 1.150 x 1.640 mm / 76,4 x 45,3 x 64,6 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ancho de la escobilla de goma</th>
                                                  <td>1.260 mm / 49,6 pulgadas</td>
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
                                    <h5>Combina tecnología y potencia para conseguir los mejores resultados de limpieza.</h5>
                                    <p style="text-align: justify;">
                                      El M1100 D de servicio pesado está diseñado para funcionar en los entornos más difíciles, reforzado con materiales de primera calidad para garantizar la confiabilidad y la solidez. Con un recorrido de limpieza de 110 cm/42 in y una velocidad máxima de 8 km/h o 5 mph, tiene una impresionante capacidad de limpieza de 8875 m²/hora o 95 500 pies²/hora. Diseñado para ser versátil tanto en espacios compactos como en grandes áreas , el M1100 D ofrece soluciones personalizadas para diversos requisitos, garantizando la máxima productividad y resultados increíbles. <br><br>
                                      El M1100 D está diseñado con características innovadoras que hacen que la limpieza sea más rápida, fácil y eficiente. El tanque de solución de alta capacidad de 220 litros / 58 galones proporciona un tiempo de actividad extenso, que se puede aumentar hasta tres veces con el innovador ECOsystem ® . Esta tecnología patentada recicla agua y productos químicos , maximizando la productividad y reduciendo tanto el costo como el impacto ambiental de la limpieza.<br><br>
                                      El sistema de secado de alto rendimiento incluye un potente motor de aspiración y una escobilla de goma parabólica de acero inoxidable, que se puede ajustar al tipo de suelo. Máximo poder de limpieza que ofrece resultados perfectos en una sola pasada.
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