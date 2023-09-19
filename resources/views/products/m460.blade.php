@extends('layout')

@section('title', 'M460')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M460</li>
        </ol>
        <h2>M460</h2>
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
                  <img src="{{ asset('img/portfolio/m460/m460-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m460/m460-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m460/m460-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M460</h3>
              <h5>Limpieza precisa en espacios reducidos</h5>
              <p style="text-align: justify;">
                La única fregadora automática de operador a pie de 460 mm, que puede limpiar y secar completamente las esquinas. Los tanques removibles de gran capacidad brindan el volumen perfecto de agua requerido para lograr una limpieza de alto rendimiento, mientras que el innovador sistema de recuperación de agua brinda pisos limpios y secos en una sola pasada.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  M460 B (Batería - 2 horas 40 minutos de funcionamiento continuo).</li>
                  <li>•  M460 C (alimentado por cable - tiempo de funcionamiento ilimitado).</li>
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
                                                  <th scope="col">M460 B (batería)</th>
                                                  <th scope="col">M460 C (cable de alimentación)</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Ruta de limpieza</th>
                                                  <td>460 mm / 18 pulgadas</td>
                                                  <td>460 mm / 18 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del depósito de agua dulce</th>
                                                  <td>28 L / 7,4 galones</td>
                                                  <td>28 L / 7,4 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>30 L / 8 galones</td>
                                                  <td>30 L / 8 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>1.600 m² / 17, 200 ft² por hora</td>
                                                  <td>1.600 m² / 17, 200 ft² por hora</td>
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
                                                  <td>24V</td>
                                                  <td>230 V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Batería estándar</th>
                                                  <td>2x12V</td>
                                                  <td>-</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Cargador de batería</th>
                                                  <td>a bordo</td>
                                                  <td>-</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (incluyendo batería y cargador)</th>
                                                  <td>106 kg / 234 libras</td>
                                                  <td>50 kg / 110 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (sin escobilla de goma) (largo x ancho x alto)</th>
                                                  <td>830 x 540 x 1000 mm / 32,7 x 21,3 x 39,4 pulgadas</td>
                                                  <td>830 x 540 x 1.000h mm / 32,7 x 21,3 x 39,4 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ancho de la escobilla de goma</th>
                                                  <td>540 mm/21,3 pulgadas</td>
                                                  <td>540 mm/21,3 pulgadas</td>
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
                                    <h5>M460: tanques de alta capacidad para la limpieza continua de áreas de difícil acceso.</h5>
                                    <p style="text-align: justify;">
                                      La M460 es la única fregadora automática de conductor acompañante de 460 mm / 18 in, que puede limpiar y secar por completo rincones que son inaccesibles con una fregadora secadora tradicional. Su tamaño único y alta maniobrabilidad permiten el acceso a áreas de difícil acceso y una perfecta limpieza alrededor de los objetos. El recorrido de limpieza de 460 mm / 18 pulgadas y una velocidad máxima de 3,5 km/h / 2,2 mph permiten una tasa de productividad de 1.600 m² / 17.200 ft² por hora.<br><br>
                                      Es imposible limpiar perfectamente un suelo sin suficiente agua. El M460 tiene un impresionante tanque de solución de 28 litros / 7,4 gal y un tanque de recuperación de 30 litros / 8 gal, que entregan el volumen óptimo de agua a la almohadilla del cepillo para obtener los mejores resultados. Estos tanques removibles de gran capacidad son únicos y brindan un poder de limpieza continuo por más tiempo. Suelos limpios y seguros sin necesidad de parar y rellenar. <br><br>
                                      Está disponible en dos versiones, con batería de 12 V para una limpieza completamente flexible o con cable de alimentación para un tiempo de funcionamiento ilimitado.
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