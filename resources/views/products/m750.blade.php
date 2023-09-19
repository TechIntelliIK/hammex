@extends('layout')

@section('title', 'M750')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M750</li>
        </ol>
        <h2>M750</h2>
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
                  <img src="{{ asset('img/portfolio/m750/m750-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m750/m750-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m750/m750-2.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M750</h3>
              <h5>La fregadora automática con conductor sentado más popular de MACH.</h5>
              <p style="text-align: justify;">
                La M750 más vendida está revolucionando el mundo de la limpieza, reemplazando las voluminosas restregadoras de operador a pie con una solución económica profesional que reduce drásticamente los costos de limpieza y mano de obra. Una fregadora automática manual y versátil que ofrece resultados brillantes rápidamente.
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
                                                  <th scope="col">M750</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>760 mm / 30 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>4.560 m² / 48.440 pies² por hora</td>
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
                                                  <td>350 kg / 772 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma) (largo x ancho x alto)</th>
                                                  <td>1425 x 790 x 1243 mm / 56,1 x 31,1 x 48,9 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ancho de la escobilla de goma</th>
                                                  <td>980 mm/38,6 pulgadas</td>
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
                                    <h5>La nueva restregadora automática de operador a bordo de 750 mm / 30 pulgadas que es completamente mecánica.</h5>
                                    <p style="text-align: justify;">
                                      La segunda fregadora automática de nuestra gama compacta con conductor sentado está diseñada para ser simple y confiable. Con un recorrido de limpieza de 750 mm / 30 pulgadas, proporciona una capacidad de limpieza de 4500 m²/hora o 48 400 pies²/hora. La M750 es una máquina compacta con una maniobrabilidad impresionante que ofrece resultados rápidos, lo que la convierte en la alternativa práctica y moderna a una voluminosa fregadora automática de operador a pie. <br><br>
                                      La combinación de un diseño compacto y alta productividad significa que la M750 se adapta perfectamente tanto a espacios reducidos como a grandes superficies. Las funciones manuales garantizan bajo mantenimiento y longevidad, mientras que los controles fáciles de usar aseguran una operación increíblemente intuitiva. <br><br>
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