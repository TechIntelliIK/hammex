@extends('layout')

@section('title', 'Wheel Jet 15 e')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Wheel Jet 15 e</li>
        </ol>
        <h2>Wheel Jet 15 e</h2>
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
                  <img src="{{ asset('img/portfolio/wheel-jet-15-e/wheel-jet-15-e.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-15-e/wheel-jet-15-e-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-15-e/wheel-jet-15-e-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-15-e/wheel-jet-15-e-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-15-e/wheel-jet-15-e-4.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-15-e/wheel-jet-15-e-5.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Wheel Jet 15 e</h3>
              <ul>
                <li><strong>Tipo:</strong> de agua fría</li>
                <li><strong>Tipo de alimentación:</strong> trifásico</li>
                <li><strong>Configuración:</strong> móvil</li>
                <li><strong>Otras características: </strong> de alta presión</li>
                <li><strong>Presión:</strong> Máx.: 500 bar (7.251,89 psi) Mín.: 50 bar (725,19 psi)</li>
                <li><strong>Caudal de agua:</strong>  Máx.: 15 l/min (3,96 us gal/min) Mín.: 8 l/min (2,11 us gal/min)</li>
                <li><strong>SKU:</strong> wheel-jet-15-e</li>
                <li><strong>Categorías:</strong> Electrico, Falch</li>
                <li><strong>Etiquetas:</strong> alta presión, móvil</li><br>
                <h5><strong>Usos industriales:</strong></h5>
                <li><strong><i class="bx bx-check"></i> <a href="#">Limpieza general</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="#">Ganadera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="#">Agrícultura</a></strong></li>
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
                                                  <th scope="col">Especificación</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Presión de trabajo</th>
                                                  <td>50 – 500 bar</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Flujo de agua</th>
                                                  <td>8 – 15 l/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">temperatura del agua</th>
                                                  <td>optional</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor eléctrico potencia max. /potencia de salida, velocidad de funcionamiento, régimen del ralentí, sistema de refrigeración</th>
                                                  <td>18 kw / 15 kw, 1450 rpm, -, air</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">conexión eléctrica / fusible, longitud del cable</th>
                                                  <td>400 v / 50 hz / 32 a, 4,0 m</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">rendimiento, velocidad de bombeo, presión del agua de entrada, max. temperatura del agua de entrada</th>
                                                  <td>15 kw, 1088 rpm, 2,0 – 8,0 bar, 40 °c</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">tamaño de la boquilla estándar</th>
                                                  <td>030 us gal/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">válvula de seguridad por escasez de agua</th>
                                                  <td>inclusive</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">tiempo de encendido (horas/día)</th>
                                                  <td>24/1</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">garantía (meses)</th>
                                                  <td>24</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">peso neto, carga vertical</th>
                                                  <td>290 kg, –</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">largo x ancho x altura</th>
                                                  <td>1175 × 760 × 945 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">nivel de ruido lpa, lwa + 1,5 db</th>
                                                  <td>75, 96 db</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">número del artículo</th>
                                                  <td>g393</td>
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
                                    <p style="text-align: justify;">Estructura protectora de acero como precaución contra daños y períodos fuera de servicio, así como para facilitar el transporte y la sujeción en los vehículos de carga. dispositivos de sujeción para accesorios, para guardar en el equipo lanzas y mangueras de alta presión de manera cómoda y fácil. neumáticos macizos (escaso mantenimiento, larga vida) para un transporte fácil, así como para una carga y descarga de vehículos más fácil. filtro de agua para una calidad uniforme en la limpieza del agua. bomba cigüeñal con pistones de cerámica, cabezal de alta calidad, larga durabilidad y con una construcción de fácil servicio. presión de trabajo regulable de forma continua. control de presión para mayor rendimiento, más seguridad y menor desgaste. sistema de regulación de presión patentado por falch de regulación continua, sin escalones. incluido arranque suave. descompresión de las mangueras si se interrumpe el trabajo. incrementa además el tiempo de vida de boquillas y accesorios. motor eléctrico de marcha lenta con reservas de capacidad para servicio continuo así como optimización de la corriente de arranque para arrancada sin recargas a la red. seguridad/regulación: para la seguridad del sistema completo han sido incorporados además componentes de acuerdo a las disposiciones reglamentarias. la regulación funciona intencionalmente sin componentes electrónicos, con el fin de evitar averías por vibraciones, humedad o frío. contador del tiempo de funcionamiento para un fácil cálculo de los trabajos con chorro de agua y para el monitoreo de los intervalos de servicio.</p>
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
