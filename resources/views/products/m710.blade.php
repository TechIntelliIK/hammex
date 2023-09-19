@extends('layout')

@section('title', 'M710')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M710</li>
        </ol>
        <h2>M710</h2>
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
                  <img src="{{ asset('img/portfolio/m710/m710-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m710/m710-2.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M710</h3>
              <h5>El comandante del poder y la precisión.</h5>
              <p style="text-align: justify;">
                Una fregadora automática profesional de operador a pie, con un cabezal de cepillo doble de 710 mm / 28 pulgadas que ofrece resultados increíbles, rápido. Diseñado para ser compacto y, por lo tanto, maniobrable, el M710 dirige el poder de limpieza con total precisión, para la limpieza eficiente de espacios reducidos. Disponible con MACH ECOsystem®.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  M710 M (Mecánico - electrónico libre)</li>
                  <li>•  M710 TRAC.</li>
                  <li>•  M710 ECO.</li>
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
                                                  <th scope="col">M710M</th>
                                                  <th scope="col">M710 TRAC</th>
                                                  <th scope="col">M710 ECO</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>710 mm / 28 pulgadas</td>
                                                  <td>710 mm / 28 pulgadas</td>
                                                  <td>710 mm / 28 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>3.200 m² / 34.450 pies² por hora</td>
                                                  <td>3.200 m² / 34.450 pies² por hora</td>
                                                  <td>3.200 m² / 34.450 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>80 L / 21,1 galones</td>
                                                  <td>80 L / 21,1 galones</td>
                                                  <td>80 L / 21,1 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>75 L / 19,8 galones</td>
                                                  <td>75 L / 19,8 galones</td>
                                                  <td>75 L / 19,8 galones</td>
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
                                                  <td>4,5 km/h/2,8 mph</td>
                                                  <td>4,5 km/h/2,8 mph</td>
                                                  <td>4,5 km/h/2,8 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Batería</th>
                                                  <td>4x6 V</td>
                                                  <td>4x6 V</td>
                                                  <td>4x6 V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Cargador de batería</th>
                                                  <td>a bordo</td>
                                                  <td>a bordo</td>
                                                  <td>a bordo</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (incluyendo batería y cargador)</th>
                                                  <td>303 kg / 668 libras</td>
                                                  <td>303 kg / 668 libras</td>
                                                  <td>303 kg / 668 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma) (largo x ancho x alto)</th>
                                                  <td>1.550 x 710 x 1.110 mm</td>
                                                  <td>1.550 x 710 x 1.110 mm</td>
                                                  <td>1.550 x 710 x 1.110 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ancho de la escobilla de goma</th>
                                                  <td>995 mm/39,2 pulgadas</td>
                                                  <td>995 mm/39,2 pulgadas</td>
                                                  <td>995 mm/39,2 pulgadas</td>
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
                                    <h5>Experimente una limpieza de alto rendimiento con el M710.</h5>
                                    <p style="text-align: justify;">
                                      La M710 es una fregadora automática extremadamente duradera, construida en acero y tratada con tecnología de recubrimiento electrolítico para la mejor protección contra la corrosión y los impactos. Es altamente productivo con un recorrido de limpieza de 710 mm/28 pulgadas y una velocidad máxima de 4,5 km/h/2,8 mph, logrando una capacidad de limpieza de hasta 3200 m²/34 450 pies² por hora. Un diseño compacto permite una alta maniobrabilidad y una limpieza precisa de áreas confinadas. <br><br>
                                      El M710 está disponible con ECOsystem® de MACH , una tecnología patentada que recicla agua y detergente. Garantizando una increíble solución, mano de obra y ahorro de costos al mismo tiempo que se reduce el impacto ambiental de la limpieza. <br><br>
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