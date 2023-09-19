@extends('layout')

@section('title', 'M510')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M510</li>
        </ol>
        <h2>M510</h2>
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
                  <img src="{{ asset('img/portfolio/m510/m510-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m510/m510-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m510/m510-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M510</h3>
              <h5>La máquina que conoces, ha dado un paso adelante</h5>
              <p style="text-align: justify;">
                La fregadora de operador a pie de 510 mm / 20 in es el modelo más vendido en el mercado, combinando economía, productividad y tamaño. MACH ha revolucionado este popular modelo, aplicando tecnología innovadora que rompe los límites de la limpieza. El resultado es la elegante M510, una fregadora automática profesional que ofrece resultados extraordinarios. Disponible con MACH ECOsystem®.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  BASE M510.</li>
                  <li>•  M510 M (Mecánica - electrónica libre).</li>
                  <li>•  M510 TRAC.</li>
                  <li>•  M510 ECO.</li>
                </ul>
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
                                                  <th scope="col">BASE M510</th>
                                                  <th scope="col">M510M</th>
                                                  <th scope="col">M510 TRAC</th>
                                                  <th scope="col">M510 ECO</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>510 mm / 20 pulgadas</td>
                                                  <td>510 mm / 20 pulgadas</td>
                                                  <td>510 mm / 20 pulgadas</td>
                                                  <td>510 mm / 20 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>2.200 m² / 23.700 pies² por hora</td>
                                                  <td>2.200 m² / 23.700 pies² por hora</td>
                                                  <td>2.200 m² / 23.700 pies² por hora</td>
                                                  <td>2.200 m² / 23.700 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>56 L / 13,2 galones</td>
                                                  <td>56 L / 13,2 galones</td>
                                                  <td>56 L / 13,2 galones</td>
                                                  <td>56 L / 13,2 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>mecánico</td>
                                                  <td>asistido electrónicamente</td>
                                                  <td>asistido electrónicamente</td>
                                                  <td>asistido electrónicamente</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>3 km/h / 1,9 mph</td>
                                                  <td>4 km/h / 2,5 mph</td>
                                                  <td>4 km/h / 2,5 mph</td>
                                                  <td>4 km/h / 2,5 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuerza</th>
                                                  <td>24V</td>
                                                  <td>24V</td>
                                                  <td>24V</td>
                                                  <td>24V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Batería</th>
                                                  <td>2x12V</td>
                                                  <td>2x12V</td>
                                                  <td>2x12V</td>
                                                  <td>2x12V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Cargador de batería</th>
                                                  <td>a bordo</td>
                                                  <td>a bordo</td>
                                                  <td>a bordo</td>
                                                  <td>a bordo</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (incluyendo batería y cargador)</th>
                                                  <td>198 kg / 437 libras</td>
                                                  <td>198 kg / 437 libras</td>
                                                  <td>198 kg / 437 libras</td>
                                                  <td>198 kg / 437 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma)</th>
                                                  <td>1.250 mm / 49 pulgadas</td>
                                                  <td>1.250 mm / 49 pulgadas</td>
                                                  <td>2.100 mm / 49 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Nivel de sonido</th>
                                                  <td>1.317 x 555 x 1.110 mm</td>
                                                  <td>1.317 x 555 x 1.110 mm</td>
                                                  <td>1.317 x 555 x 1.110 mm</td>
                                                  <td>1.317 x 555 x 1.110 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Sistema DoseMatic</th>
                                                  <td>830 mm/32,7 pulgadas</td>
                                                  <td>830 mm/32,7 pulgadas</td>
                                                  <td>830 mm/32,7 pulgadas</td>
                                                  <td>830 mm/32,7 pulgadas</td>
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
                                    <h5>Tecnología industrial en un diseño compacto; simplifica la limpieza diaria con un presupuesto reducido con el M500.</h5>
                                    <p style="text-align: justify;">
                                      La M510 es una robusta fregadora automática de operador a pie que ofrece resultados extraordinarios. Increíblemente potente, garantiza la máxima recogida de agua y eliminación de suciedad, lo que garantiza un suelo seco, profesionalmente limpio y listo para el tráfico. <br><br>
                                      Con un diseño elegante y muy maniobrable, el M510 garantiza un funcionamiento sin esfuerzo y un manejo ligero al tacto. Es altamente productivo con un recorrido de limpieza de 510 mm / 20 in y una tracción máxima de 4 km/h / 2,5 mph, logra una capacidad de limpieza de hasta 2200 m² / 23 700 ft² por hora. También puede confiar en la fabricación MACH; el M510 es increíblemente duradero, construido en acero y electro-revestido para la mejor protección anticorrosión y resistencia al impacto. <br><br>
                                      El M510 está disponible con ECOsystem ® de MACH , una tecnología patentada que recicla agua y detergente. Garantizando una increíble solución, mano de obra y ahorro de costos al mismo tiempo que se reduce el impacto ambiental de la limpieza.<br><br>
                                      <h5>El M510 está disponible en cuatro versiones:</h5>
                                      <ul>
                                        <li>BASE: ofrece un rendimiento de limpieza con una excelente relación calidad-precio.</li>
                                        <li>MECÁNICO: sin electrónica para una simplicidad absoluta.</li>
                                        <li>TRAC: funciones completas para un control máximo.</li>
                                        <li>ECO – tope de gama y con tecnología MACH, equipada con ECOSystem ®</li>
                                      </ul>
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