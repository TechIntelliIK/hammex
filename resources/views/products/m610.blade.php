@extends('layout')

@section('title', 'M610')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M610</li>
        </ol>
        <h2>M610</h2>
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
                  <img src="{{ asset('img/portfolio/m610/m610-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m610/m610-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m610/m610-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M610</h3>
              <h5>Dos cepillos en perfecto equilibrio</h5>
              <p style="text-align: justify;">
                Una fregadora automática profesional de operador a pie, de diseño compacto con la ventaja de un cabezal de cepillo doble. El M610 está optimizado para lograr un equilibrio y una maniobrabilidad perfectos, lo que garantiza un manejo ligero y una productividad notable. Disponible con MACH ECOsystem®.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  M610 M (Mecánico - electrónico libre)</li>
                  <li>•  M610 TRAC.</li>
                  <li>•  M610 ECO.</li>
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
                                                  <th scope="col">M610 M (Mecánico-electrónico libre)</th>
                                                  <th scope="col">M610 TRAC</th>
                                                  <th scope="col">M610 ECO</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>610 mm / 24 pulgadas</td>
                                                  <td>610 mm / 24 pulgadas</td>
                                                  <td>610 mm / 24 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>2.440 m² / 26.260 pies² por hora</td>
                                                  <td>2.440 m² / 26.260 pies² por hora</td>
                                                  <td>2.440 m² / 26.260 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>56 L / 14,8 galones</td>
                                                  <td>56 L / 14,8 galones</td>
                                                  <td>56 L / 14,8 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuerza</th>
                                                  <td>24V</td>
                                                  <td>24V</td>
                                                  <td>24V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>asistido electrónicamente</td>
                                                  <td>asistido electrónicamente</td>
                                                  <td>asistido electrónicamente</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>4 km/h / 2,5 mph</td>
                                                  <td>4 km/h / 2,5 mph</td>
                                                  <td>4 km/h / 2,5 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Batería</th>
                                                  <td>2x12 V</td>
                                                  <td>2x12 V</td>
                                                  <td>2x12 V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Cargador de batería</th>
                                                  <td>a bordo</td>
                                                  <td>a bordo</td>
                                                  <td>a bordo</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (incluyendo batería y cargador)</th>
                                                  <td>206 kg / 454 libras</td>
                                                  <td>206 kg / 454 libras</td>
                                                  <td>206 kg / 454 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma) (largo x ancho x alto)</th>
                                                  <td>1.301 x 630 x 1.110 mm</td>
                                                  <td>1.301 x 630 x 1.110 mm</td>
                                                  <td>1.301 x 630 x 1.110 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ancho de la escobilla de goma</th>
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
                                    <h5>Experimente la productividad y la maniobrabilidad con el M610.</h5>
                                    <p style="text-align: justify;">
                                      Una fregadora de operador a pie profesional, diseñada para entregar pisos secos y limpios profesionalmente que están listos para el tránsito. El M610 garantiza un funcionamiento sin esfuerzo, con cabezales de cepillo dobles que giran en sentido contrario para una maniobrabilidad y un equilibrio excepcionales. También es muy productiva con un recorrido de limpieza de 610 mm/24 in y una tracción máxima de 4 km/h/2,5 mph, logra una capacidad de limpieza de hasta 2440 m²/26 230 ft² por hora.<br><br>
                                      Puede confiar en nuestro proceso de fabricación que utiliza materiales y componentes de primera calidad, lo que garantiza confiabilidad, durabilidad y bajo mantenimiento. El M610 está construido en acero y tratado con tecnología de recubrimiento electrolítico, para la mejor protección contra la corrosión y los impactos. <br><br>
                                      El M610 está disponible con ECOsystem ® de MACH , una tecnología patentada que recicla agua y detergente. Garantizando una increíble solución, mano de obra y ahorro de costos al mismo tiempo que se reduce el impacto ambiental de la limpieza. <br><br>
                                      <h5>El M610 está disponible en tres versiones:</h5>
                                      <ul>
                                        <li>MECÁNICO: sin electrónica para una simplicidad absoluta.</li>
                                        <li>TRAC: funciones completas para un control máximo.</li>
                                        <li>ECO – tope de gama y con tecnología MACH, equipada con el EcoSystem.</li>
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