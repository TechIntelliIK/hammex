@extends('layout')

@section('title', 'Base Jet 125 e')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Base Jet 125 e</li>
        </ol>
        <h2>Base Jet 125 e</h2>
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
                  <img src="{{ asset('img/portfolio/Base-Jet-125-e/Base-Jet-125-e.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-e/Base-Jet-125-e-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-e/Base-Jet-125-e-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-e/Base-Jet-125-e-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/Base-Jet-125-e/Base-Jet-125-e-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Base Jet 125 e</h3>
              <ul>
                <li><strong>Tipo:</strong> de agua fría</li>
                <li><strong>Tipo de alimentación:</strong> trifásico</li>
                <li><strong>Configuración:</strong> estacionario</li>
                <li><strong>Otras características: </strong> con depósito</li>
                <li><strong>Presión:</strong>  Varias opciones</li>
                <li><strong>Caudal de agua:</strong>  Varias opciones</li>
                <li><strong>SKU:</strong> g369</li>
                <li><strong>Categorías:</strong> Electrico, Falch</li>
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
                                                  <td>11 – 22 l/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor eléctrico potencia max. /potencia de salida, velocidad de funcionamiento, régimen del ralentí, sistema de refrigeración</th>
                                                  <td>160 kw / 132 kw, 1800 rpm, 900 rpm, air</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conexión eléctrica / fusible, longitud del cable</th>
                                                  <td>400 v / 50 hz / 250 a, –</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Rendimiento, velocidad de bombeo, presión del agua de entrada, max. temperatura del agua de entrada</th>
                                                  <td>125 kw, 610 rpm, 2,0 – 8,0 bar, 40 °c</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño de la boquilla estándar</th>
                                                  <td>018 us gal/min</td>
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
                                                  <td>24/1</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Garantía (meses)</th>
                                                  <td>24</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de agua</th>
                                                  <td>80 l</td>
                                              </tr
                                              <tr>
                                                  <th scope="row">Peso neto, carga vertical</th>
                                                  <td>2370 kg, –</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Largo x ancho x altura</th>
                                                  <td>2240 × 1550 × 1910 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Nivel de ruido lpa, lwa + 1,5 db</th>
                                                  <td>73 db</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Número del artículo</th>
                                                  <td>g369</td>
                                              </tr>
                                          </tbody>
                                      </table>
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
