@extends('layout')

@section('title', 'M360')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M360</li>
        </ol>
        <h2>M360</h2>
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
                  <img src="{{ asset('img/portfolio/m360/m360-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m360/m360-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m360/m360-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M360</h3>
              <h5>Exfoliante y secado de 360 ​​grados</h5>
              <p style="text-align: justify;">
                La fregadora automática compacta de operador a pie, que ofrece una limpieza potente en espacios reducidos, ¡incluso en las esquinas! Los tanques de gran capacidad brindan el volumen perfecto de agua requerido para lograr una limpieza de alto rendimiento, mientras que el innovador sistema de recuperación de agua brinda pisos limpios y secos en una sola pasada. Limpieza de 360 ​​grados, al alcance de tu mano.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  M360 B (impulsado por batería de 12 V: 1 hora y 40 minutos de funcionamiento continuo).</li>
                  <li>•  M360 C (alimentado por cable - tiempo de funcionamiento ilimitado).</li>
                </ul>
              </p>
              <h5>CAMPOS DE APLICACIÓN</h5>
              <p style="text-align: justify;">
                Restaurantes, cocinas, piscinas, vestuarios, cafés y bares, hospitales, clubes, pequeñas fábricas, supermercados, farmacias y muchas más áreas de tamaño pequeño a mediano.
              </p>
              <h5>SUPERFICIES DE LIMPIEZA ADECUADAS</h5>
              <p style="text-align: justify;">
                Baldosas de cerámica, mármol, cemento, linóleo, gres porcelánico, suelos de goma, sobre cualquier tipo de suciedad.
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
                                                  <th scope="col">M360 B (batería)</th>
                                                  <th scope="col">M360 C (alimentado por cable)</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Ruta de limpieza</th>
                                                  <td>360 mm / 14 pulgadas</td>
                                                  <td>360 mm / 14 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza </th>
                                                  <td>1.250 m² / 13.500 pies² por hora</td>
                                                  <td>1.250 m² / 13.500 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del depósito de agua dulce</th>
                                                  <td>14 L / 3,7 galones</td>
                                                  <td>14 L / 3,7 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>16 L / 4,2 galones</td>
                                                  <td>16 L / 4,2 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>mecánico</td>
                                                  <td>mecánico</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>3,5 km/h / 2,2 mph</td>
                                                  <td>3,5 km/h / 2,2 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuerza</th>
                                                  <td>12 voltios</td>
                                                  <td>230 V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Batería estándar</th>
                                                  <td>1x12V</td>
                                                  <td>-</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Cargador de batería</th>
                                                  <td>a bordo</td>
                                                  <td>-</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (incluyendo batería y cargador)</th>
                                                  <td>63 kg / 139 libras</td>
                                                  <td>41 kg / 90 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma) (largo x ancho x alto)</th>
                                                  <td>680 x 450 x 1000 mm / 26,7 x 17,7 x 39,4 pulgadas</td>
                                                  <td>680 x 450 x 1000 mm / 26,7 x 17,7 x 39,4 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ancho de la escobilla de goma</th>
                                                  <td>450 mm/17,7 pulgadas</td>
                                                  <td>450 mm/17,7 pulgadas</td>
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
                                    <h5>M360: compacta, ágil y muy productiva.</h5>
                                    <p style="text-align: justify;">
                                      La M360 ha sido optimizada para la limpieza de espacios confinados, antes inalcanzables con una fregadora automática tradicional. Su diseño compacto y maniobrabilidad permite el acceso a zonas de difícil acceso y una perfecta limpieza alrededor de los objetos. El recorrido de limpieza de 360 ​​mm y una velocidad máxima de 3,7 km/h permiten una tasa de productividad de 1.322 m²/hora.<br><br>
                                      Es imposible limpiar perfectamente un suelo sin suficiente agua. El M360 tiene un impresionante tanque de solución de 14 litros y un tanque de recuperación de 16 litros, que entregan el volumen óptimo de agua a la almohadilla del cepillo para obtener los mejores resultados. El innovador sistema de recuperación de agua y la escobilla de goma autoajustable garantizan la máxima recogida de agua y la eliminación completa de la suciedad, evitando el riesgo de accidentes por resbalones y caídas. Suelos limpios y seguros sin necesidad de parar y rellenar. <br><br>
                                      Está disponible en 2 versiones, con batería de 12 V para una limpieza completamente flexible o con cable de alimentación para un tiempo de funcionamiento ilimitado.
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
