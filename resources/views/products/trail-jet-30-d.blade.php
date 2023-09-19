@extends('layout')

@section('title', 'Trail Jet 30 d')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Trail Jet 30 d</li>
        </ol>
        <h2>Trail Jet 30 d</h2>
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
                  <img src="{{ asset('img/portfolio/Trail-jet-30-d/Trail-jet-30-d.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Trail-jet-30-d/Trail-jet-30-d-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Trail-jet-30-d/Trail-jet-30-d-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Trail-jet-30-d/Trail-jet-30-d-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Trail Jet 30 d</h3>
              <ul>
                <li><strong>Tipo:</strong> de agua caliente</li>
                <li><strong>Tipo de alimentación:</strong> con motor diésel</li>
                <li><strong>Configuración:</strong> móvil, de tracción</li>
                <li><strong>Otras características: </strong> de alta presión, con depósito</li>
                <li><strong>Presión:</strong> Máx.: 500 bar (7.251,89 psi) Mín.: 100 bar (1.450,38 psi)</li>
                <li><strong>Caudal de agua:</strong>  Máx.: 30 l/min (7,93 us gal/min) Mín.: 17 l/min (4,49 us gal/min)</li>
                <li><strong>SKU:</strong> g360</li>
                <li><strong>Categorías:</strong> De Gasolina, Falch</li>
                <li><strong>Etiquetas:</strong> agua caliente, alta presión, móvil</li><br>
                <h5><strong>Usos industriales:</strong></h5>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción: remoción de escombros</a></strong></li>
                <li><strong><i class="bx bx-check"></i> Servicio Público</strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
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
                                    Tabla de datos técnicos 300 bar
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
                                                  <td>100 – 1000 bar</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Flujo de agua</th>
                                                  <td>8 – 13 l/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor diesel potencia max./ potencia de salida, velocidad de funcionamiento, régimen del ralentí, cilindros, capacidad, sistema de refrigeración</th>
                                                  <td>36,4 kw / 31 kw, 1800 rpm, 1000 rpm, 4 cyl., 3620 ccm, oil</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">consumo de combustible sobre carga del 60%</th>
                                                  <td>4,3 l/h diesel</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row"> rendimiento, velocidad de bombeo, presión del agua de entrada, max. temperatura del agua de entrada</th>
                                                  <td>28 kw, 1030 rpm, 2,0 – 8,0 bar, 40 °c</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">tamaño de la boquilla estándar</th>
                                                  <td>019 us gal/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">válvula de seguridad por escasez de agua</th>
                                                  <td>inclusive</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">sistema anticongelante</th>
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
                                                  <th scope="row">capacidad del tanque de agua</th>
                                                  <td>200 l</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">capacidad del tanque de combustible</th>
                                                  <td>90 l</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">peso neto, carga vertical</th>
                                                  <td>900 kg, 100 kg</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">largo x ancho x altura</th>
                                                  <td>3250 × 1600 × 1850 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">nivel de ruido lpa, lwa + 1,5 db</th>
                                                  <td>76 db</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">número del artículo</th>
                                                  <td>g360</td>
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
                                    <p style="text-align: justify;">Sistema de remolque sobre chasis totalmente galvanizado con freno de inercia  y sistema de tanque de cámaras múltiples para acortar el tiempo de preparación y lograr la extensión a nuevos campos de aplicación para el posicionamiento en el mercado frente a los competidores y para el aseguramiento de resultados de trabajo de más alta calidad. Con este equipo de remolque Ud. entusiasmará no sólo a sus compradores y clientes sino también a sus colaboradores. estructura de protección de acero como precaución contra daños y períodos fuera de servicio. cubierta de plástico laminado a mano resistente a golpes y especialmente resistente al calor. Protege motor y bomba contra suciedades y reduce considerablemente el nivel de intensidad acústica. adicionalmente con aislado con materiales insonorizantes, para evitar las quejas por emisiones de ruido. Filtro en la entrada de alimentación y filtro fino para una calidad uniforme en la limpieza del agua.</p>
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
