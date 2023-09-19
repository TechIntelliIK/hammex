@extends('layout')

@section('title', 'Mach 1')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach 1</li>
        </ol>
        <h2>Mach 1</h2>
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
                  <img src="{{ asset('img/portfolio/mach1/mach1-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach1/mach1-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach1/mach1-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach1/mach1-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Mach 1</h3>
              <h5>El pionero</h5>
              <p style="text-align: justify;">
                La única aspiradora de operador a pie con un sistema de filtración doméstico. Experimente una limpieza sin complicaciones y la máxima productividad con el MACH 1, perfecto en entornos industriales y de limpieza. Cómoda limpieza en cualquier momento con una excelente relación calidad-precio.
              </p>
              <h5>Eficaz en múltiples superficies:</h5>
              <p style="text-align: justify;">
                Interiores y exteriores, duras y blandas (incluyendo moqueta de bajo perfil).
              </p>
              <h5>Ideal para espacios pequeños a medianos:</h5>
              <p style="text-align: justify;">
                Sitios industriales, sitios de construcción, escuelas, oficinas, estaciones, hospitales, espacios públicos, aeropuertos, centros comerciales, tiendas minoristas, almacenes, estacionamientos, espacios residenciales y patios.
              </p>
              <h5>Caracteristicas de seguridad:</h5>
              <ul>
                <li>• Encendido con llave para simplemente encender y apagar la máquina.</li>
                <li>• Palanca de tracción delantera.</li>
                <li>• Deflector de aislamiento del sistema de filtración.</li>
                <li>• Palanca de control del cepillo lateral.</li>
                <li>• freno de mano.</li>
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
                                                  <th scope="col">MACH 1 EB</th>
                                                  <th scope="col">MACH 1 SH</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Trayectoria de barrido total</th>
                                                  <td>780 mm / 31 pulgadas</td>
                                                  <td>780 mm / 31 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Productividad</th>
                                                  <td>3.510 m² / 37.800 pies² por hora</td>
                                                  <td>3.510 m² / 37.800 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensión (lxwxh)</th>
                                                  <td>1555 x 835 x 980 mm / 61 x 33 x 39 pulgadas</td>
                                                  <td>1555 x 835 x 980 mm / 61 x 33 x 39 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso</th>
                                                  <td>98 kg / 216 libras</td>
                                                  <td>127 kg / 280 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuente de alimentación</th>
                                                  <td>batería de 12 V</td>
                                                  <td>motor honda 4cv</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor</th>
                                                  <td>0,8 caballos de fuerza</td>
                                                  <td>0,8 caballos de fuerza</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tracción delantera</th>
                                                  <td>4,5 km/h / 3 mph</td>
                                                  <td>4,5 km/h / 3 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de la tolva</th>
                                                  <td>40 L / 11 galones</td>
                                                  <td>40 L / 11 galones</td>
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
                                    <h5>El sistema de filtración exclusivo de la MACH 1, pionera de las barredoras aspiradoras de operador a pie, brinda la máxima limpieza.</h5>
                                    <p style="text-align: justify;">
                                      Disponible en 2 modelos:
                                      <ul>
                                        <li>Versión a batería perfecta tanto para ambientes interiores como exteriores, sin emisiones y funcionamiento silencioso.</li>
                                        <li>Motor Honda apto para ambientes exteriores, maximizando el tiempo de funcionamiento.</li>
                                      </ul>
                                      La MACH 1 es una barredora extremadamente duradera, construida en acero con una capa protectora de ABS indestructible y el acabado siempre se verá nuevo, gracias a una pintura resistente que nunca se desvanece. El diseño compacto y las ruedas grandes que no dejan huellas permiten una maniobrabilidad impresionante, un fácil manejo y flexibilidad para trabajar con eficacia tanto en entornos interiores como exteriores. <br><br>
                                      El sistema inteligente de filtración por aspiración de la MACH 1 ofrece una limpieza segura y sin polvo y una productividad óptima. Un cepillo en forma de cheurón totalmente ajustable agarra la suciedad y la conduce hacia el centro del cepillo, eliminando los residuos del lado izquierdo. El cepillo utiliza el inteligente principio de volcado, lo que garantiza la recogida completa de residuos y el uso máximo de la capacidad de 40 litros / 11 galones de la tolva. <br><br>
                                      Su ingenioso diseño se adapta al operador, lo que lo hace fácil de usar y resistente, un mango ajustable y controles intuitivos maximizan la comodidad y el control durante el uso. El MACH 1 está equipado con características simples pero inteligentes que brindan un poder de limpieza increíble sin la molestia del mantenimiento.
                                    </p>
                                    <h5>Información clave</h5>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>Fuente de energía: Batería o motor Honda.</li>
                                        <li>Uso: Ideal para áreas pequeñas a medianas.</li>
                                        <li>Ideal para entornos industriales y de limpieza.</li>
                                        <li>Productividad: Barrer hasta 3.500 m² / 37.700 ft² por hora.</li>
                                        <li>Capacidad de la tolva: 40 litros / 11 galones.</li>
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
