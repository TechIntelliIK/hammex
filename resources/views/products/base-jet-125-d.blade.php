@extends('layout')

@section('title', 'Base Jet 125 d')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Base Jet 125 d</li>
        </ol>
        <h2>Base Jet 125 d</h2>
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
                  <img src="{{ asset('img/portfolio/Base-Jet-125-d/Base-Jet-125-d.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-d/Base-Jet-125-d-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-d/Base-Jet-125-d-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-d/Base-Jet-125-d-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-d/Base-Jet-125-d-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Base Jet 125 d</h3>
              <ul>
                <li><strong>Tipo:</strong> de agua fría</li>
                <li><strong>Tipo de alimentación:</strong> con motor diésel</li>
                <li><strong>Configuración:</strong> estacionario</li>
                <li><strong>Otras características: </strong> de alta presión, con depósito, de acero inoxidable</li>
                <li><strong>Presión:</strong>  Varias opciones</li>
                <li><strong>Caudal de agua:</strong>  Varias opciones</li>
                <li><strong>SKU:</strong> g359</li>
                <li><strong>Categorías:</strong> De Gasolina, Falch</li>
                <li><strong>Etiquetas:</strong> agua fría, alta presión, hidrolimpieza, sistema</li><br>
                <h5><strong>Usos industriales:</strong></h5>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción</a></strong></li>
                <li><strong><i class="bx bx-check"></i> Hidrodemolición</strong></li>
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
                                                  <td>600 – 3000 bar</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Flujo de agua</th>
                                                  <td>10 – 22 l/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor diesel potencia max./ potencia de salida, velocidad de funcionamiento, régimen del ralentí, cilindros, capacidad, sistema de refrigeración</th>
                                                  <td>129 kw / 125 kw, 2300 rpm, 1000 rpm, 4 cyl., 4760 ccm, water</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Consumo de combustible sobre carga del 60%</th>
                                                  <td>18,5 l/h diesel</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Rendimiento, velocidad de bombeo, presión del agua de entrada, max. temperatura del agua de entrada</th>
                                                  <td>125 kw, 600 rpm, 2,0 – 8,0 bar, 40 °c</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño de la boquilla estándar</th>
                                                  <td>018 usgal/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Válvula de seguridad por escasez de agua</th>
                                                  <td>inclusive</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Sistema anticongelante</th>
                                                  <td>inclusive</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tiempo de encendido (horas/día)</th>
                                                  <td>24</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Garantía (meses)</th>
                                                  <td>24</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de agua</th>
                                                  <td>80 l</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de combustible</th>
                                                  <td>210 l</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso neto, carga vertical</th>
                                                  <td>1960 kg, –</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Largo x ancho x altura</th>
                                                  <td>2240 x 1550 x 1980 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Nivel de ruido lpa, lwa + 1,5 db</th>
                                                  <td>86 db</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Número del artículo</th>
                                                  <td>g359</td>
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
                                    <p style="text-align: justify;">Equipo básico montado sobre chasis totalmente galvanizado revestido al polvo. de fácil transporte con carretilla de horquilla, grúa, remolque, camión o en barco. este sistema fue concebido para condiciones de uso en las que se requiere una muy elevada potencia de chorro para las más reducidas dimensiones exteriores del equipo, p. ej. en obras con poco espacio de maniobra, barcos, edificios y plantas industriales, o para montaje en vehículos más grandes. tampoco cuando no utiliza el equipo desperdicia Ud. en su depósito m² alguno. base jet significa: resultados óptimos con un mínimo de gastos de espacio de trabajo. estructura de protección de acero como precaución contra daños y períodos fuera de servicio. cubierta de plástico laminado a mano resistente a golpes y especialmente resistente al calor. protege motor y bomba contra suciedades y reduce considerablemente el nivel de intensidad acústica. filtro en la entrada de alimentación y filtro fino para una calidad uniforme en la limpieza del agua. depósito de agua de acero inoxidable revestido al polvo integrado al equipo. compensa oscilaciones de presión en la tubería de alimentación y aumenta la duración de la bomba de alta presión mediante agua libre de burbujas. bomba de presión inicial para un suministro óptimo de la bomba de alta presión. bomba de cigüeñal falch de marcha lenta para mayores esfuerzos y carga continua. Los costes de servicio técnico y mantenimiento se redujeron merced al uso de materiales y componentes de alta calidad. la estructura sencilla y sólida de la bomba garantiza además aún al cabo de años un recambio rápido y económico de  piezas de desgaste.</p>
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
