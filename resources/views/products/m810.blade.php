@extends('layout')

@section('title', 'M810')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M810</li>
        </ol>
        <h2>M810</h2>
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
                  <img src="{{ asset('img/portfolio/m810/m810-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m810/m810-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m810/m810-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M810</h3>
              <h5>El maestro de las fregadoras automáticas de operador a pie.</h5>
              <p style="text-align: justify;">
                La M810 es la mejor de la gama, una fregadora automática profesional de conductor acompañante con cabezal de cepillo doble de 810 mm / 32 pulg., para la limpieza rápida de grandes áreas. Confíe en el M810 para obtener siempre resultados sobresalientes, es la solución ideal incluso para los entornos más difíciles. Disponible con MACH ECOsystem®.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  M810 M (Mecánico - electrónico libre)</li>
                  <li>•  M810 TRAC.</li>
                  <li>•  M810 ECO.</li>
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
                                                  <th scope="col">M810M</th>
                                                  <th scope="col">M810 TRAC</th>
                                                  <th scope="col">M810 ECO</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>810 mm / 32 pulgadas</td>
                                                  <td>810 mm / 32 pulgadas</td>
                                                  <td>810 mm / 32 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>3.650 m² / 39,290 ft² por hora</td>
                                                  <td>3.650 m² / 39,290 ft² por hora</td>
                                                  <td>3.650 m² / 39,290 ft² por hora</td>
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
                                                  <td>308 kg / 679 libras</td>
                                                  <td>308 kg / 679 libras</td>
                                                  <td>308 kg / 679 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma) (largo x ancho x alto)</th>
                                                  <td>1.555 x 820 x 1.110 mm</td>
                                                  <td>1.555 x 820 x 1.110 mm</td>
                                                  <td>1.555 x 820 x 1.110 mm</td>
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
                                    <h5>Experimente resultados perfectos con el potente M810.</h5>
                                    <p style="text-align: justify;">
                                      El M810 es la combinación ideal de tecnología y tamaño, con una amplia trayectoria de limpieza y un intenso poder de limpieza que ofrece resultados perfectos, incluso en las superficies más duras. Es altamente productiva con un cabezal de cepillo doble de 810 mm/32 pulgadas y una tracción máxima de 4,5 km/h/2,8 mph, la M810 puede ofrecer una impresionante capacidad de limpieza de hasta 3650 m²/39 290 pies² por hora. La amplia ruta de limpieza maximiza el tiempo de actividad y la productividad, brindando pisos perfectamente limpios y secos, rápidamente. <br><br>
                                      El M810 está disponible con ECOsystem ® de MACH , una tecnología patentada que recicla agua y detergente. Garantizando una increíble solución, mano de obra y ahorro de costos al mismo tiempo que se reduce el impacto ambiental de la limpieza. <br><br>
                                      <h5>El M810 está disponible en tres versiones:</h5>
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