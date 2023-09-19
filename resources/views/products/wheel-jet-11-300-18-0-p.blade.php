@extends('layout')

@section('title', 'Wheel Jet 11 300-18-0-p')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Wheel Jet 11 300-18-0-p</li>
        </ol>
        <h2>Wheel Jet 11 300-18-0-p</h2>
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
                  <img src="{{ asset('img/portfolio/wheel-jet-11-300-18-0-p/wheel-jet-11-300-18-0-p.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-11-300-18-0-p/wheel-jet-11-300-18-0-p-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-11-300-18-0-p/wheel-jet-11-300-18-0-p-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-11-300-18-0-p/wheel-jet-11-300-18-0-p-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-11-300-18-0-p/wheel-jet-11-300-18-0-p-4.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-11-300-18-0-p/wheel-jet-11-300-18-0-p-5.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-11-300-18-0-p/wheel-jet-11-300-18-0-p-6.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Wheel Jet 11 300-18-0-p</h3>
              <ul>
                <li><strong>Tipo:</strong> de agua fría</li>
                <li><strong>Tipo de alimentación:</strong> con motor de gasolina</li>
                <li><strong>Configuración:</strong> móvil</li>
                <li><strong>Otras características: </strong> de alta presión</li>
                <li><strong>Presión:</strong> Máx.: 30 bar (435,11 psi) Máx.: 300 bar (4.351,13 psi)</li>
                <li><strong>Caudal de agua:</strong>  Máx.: 8 l/min (2,11 us gal/min) Máx.: 18 l/min (4,76 us gal/min)</li>
                <li><strong>SKU:</strong> wheel Jet 11 300-18-0-p</li>
                <li><strong>Categorías:</strong> De Gasolina, Falch</li>
                <li><strong>Etiquetas:</strong> agua fría, alta presión, motor de gasolina, móvil</li><br>
                <h5><strong>Usos industriales:</strong></h5>
                <li><strong><i class="bx bx-check"></i> <a href="#">Construcción</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="#">Limpieza general</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="#">Ganadera</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="#">Agrícola</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="#">Automotriz</a></strong></li>
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
                                                  <td>30 – 300 bar</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Flujo de agua</th>
                                                  <td>8 – 18 l/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">temperatura del agua</th>
                                                  <td>optional</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor gasolina potencia max./ potencia de salida, velocidad de funcionamiento, régimen del ralentí, cilindros, capacidad, sistema de refrigeración</th>
                                                  <td>13 kw / 12 kw, 3150 rpm, 3400 rpm, 2 cyl., 570 ccm, air</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">consumo de combustible sobre carga del 60%</th>
                                                  <td>2,8 l/h petrol</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">rendimiento, velocidad de bombeo, presión del agua de entrada, max. temperatura del agua de entrada</th>
                                                  <td>11 kw, 1460 rpm, 2,0 – 8,0 bar, 70 °c</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">tamaño de la boquilla estándar</th>
                                                  <td>045 us gal/min</td>
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
                                                  <th scope="row">capacidad del tanque de combustible</th>
                                                  <td>7,9 l–</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">peso neto, carga vertical</th>
                                                  <td>155 kg, –</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">largo x ancho x altura</th>
                                                  <td>1175 × 755 × 920 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">nivel de ruido lpa, lwa + 1,5 db</th>
                                                  <td>86 db</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">número del artículo</th>
                                                  <td>g331</td>
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
                                    <p style="text-align: justify;">Los coches compactos de conducción en las ruedas de caucho macizo para el transporte sin esfuerzo con marco de acero robusto como protección preventiva contra los daños y el tiempo de inactividad. dispositivo de tubo-hd-en. bomba cigüeñal con pistones de cerámica, cabezal de alta calidad, larga durabilidad y con una construcción de fácil servicio. presión de trabajo regulable de forma continua. motor eléctrico con protección contra salpicaduras de agua, construcción robusta para servicio continuo. arranque y parada automáticos. manguera de alta presión falch nonstop 2, 20 m, 250 bar, 155 °C, 8 mm diámetro interior. la estructura de acero proporciona una durabilidad especialmente larga sin necesidad de reparaciones. tambor portador para manguera de alta presión, ahorra mucho tiempo y espacio. pistola de alta presión falch gun 3 con presión de apoyo e ingeniosa aguja de limpieza de boquilla, garantizan un servicio continuo del chorro por parte del operador sin dolor en las manos o articulaciones. lanza para un trabajo más seguro. gracias a los refuerzos en los protectores de manos y en los tubos de metal, ya no pueden producirse daños en las conexiones o roscas (acero inoxidable) a pesar de que existan fugas accidentales. accesorios de falch que amplían las posibilidades de aplicación y ofrecen ahorro de tiempo en los trabajos con chorros de agua. el personal de servicio logra con la ropa óptima de protección y seminarios especiales un mejor y más rápido rendimiento del trabajo. las operaciones con agua caliente se pueden incorporar en etapas posteriores debido al empleo del moderno sistema modular de falch.</p>
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
