@extends('layout')

@section('title', 'Mach 6')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach 6</li>
        </ol>
        <h2>Mach 6</h2>
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
                  <img src="{{ asset('img/portfolio/mach6/mach6-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach6/mach6-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach6/mach6-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach6/mach6-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Mach 6</h3>
              <h5>Barrido perfecto, cualquier entorno</h5>
              <p style="text-align: justify;">
                Barrido perfecto, cualquier entorno
                La MACH 6 es una robusta barredora de volteo alto con nuestro innovador sistema de filtración de la casa instalado de serie, lo que garantiza un control total del polvo y sin obstrucciones. Experimente un barrido potente en cualquier entorno.
              </p>
              <h5>Eficaz en múltiples superficies:</h5>
              <p style="text-align: justify;">
                Interiores y exteriores, duras y blandas (incluyendo moqueta de bajo perfil).
              </p>
              <h5>Ideal para espacios medianos a grandes:</h5>
              <p style="text-align: justify;">
                itios industriales, sitios de construcción, escuelas, oficinas, estaciones, hospitales, espacios públicos, aeropuertos, centros comerciales, tiendas minoristas, almacenes, estacionamientos, espacios residenciales y patios.
              </p>
              <h5>Caracteristicas de seguridad:</h5>
              <p style="text-align: justify;">
                Sensor de seguridad en el asiento del operador, alarma de marcha atrás, luces de seguridad, freno de mano, filtro de aislamiento.
              </p>
              <h5>Características opcionales:</h5>
              <p style="text-align: justify;">
                Tejadillo de protección, kit de cabina de PVC, parabrisas y limpiaparabrisas de policarbonato, kit de homologación calle, luz intermitente, kit de cepillo lateral izquierdo, guardapolvo para cepillos laterales, luz de advertencia de marcha atrás, juego completo de luces, retrovisor exterior, asiento de muelles.
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
                                                  <th scope="col">MACH 6 HDK (diésel)</th>
                                                  <th scope="col">MACH 6 HGK LPG (híbrido gas gasolina)</th>
                                                  <th scope="col">MACH 6 EB EVOLUCIÓN (batería)</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Trayectoria de barrido total</th>
                                                  <td>1.560 mm / 62 in (2 cepillos laterales)</td>
                                                  <td>1.560 mm / 62 in (2 cepillos laterales)</td>
                                                  <td>1.560 mm / 62 in (2 cepillos laterales)</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Productividad</th>
                                                  <td>18.720 m² / 201.500 pies² por hora</td>
                                                  <td>17.940 m² / 193.105 pies² por hora</td>
                                                  <td>13.730 m² / 147.788 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensión (lxwxh)</th>
                                                  <td>1.560 x 2.380 x 1.900 mm / 50 x 94 x 75 pulgadas</td>
                                                  <td>1.560 x 2.380 x 1.900 mm / 50 x 94 x 75 pulgadas</td>
                                                  <td>1.380 x 2.380 x 1.900 mm / 50 x 94 x 75 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso</th>
                                                  <td>1,175 kg / 2590 libras</td>
                                                  <td>1,163 kg / 2563 libras</td>
                                                  <td>1,386 kg / 3056 libras (con batería)</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir motor</th>
                                                  <td>hidráulico</td>
                                                  <td>hidráulico</td>
                                                  <td>con control electrónico (2.200 W)</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor principal</th>
                                                  <td>Diésel Kubota 20,6 CV</td>
                                                  <td>Gas GLP Kubota 29,5 CV</td>
                                                  <td>1 x 36 V - 1.800 W - 2,5 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>12,00 km/h / 7,5 mph</td>
                                                  <td>11,50 km/h / 7,2 mph</td>
                                                  <td>8,8 km/h / 5,5 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de la tolva</th>
                                                  <td>236 L / 63 galones</td>
                                                  <td>236 L / 63 galones</td>
                                                  <td>236 L / 63 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tipo de filtro</th>
                                                  <td>filtro de bolsa de poliéster</td>
                                                  <td>filtro de bolsa de poliéster</td>
                                                  <td>filtro de bolsa de poliéster</td>
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
                                    <h5>Resistente, repleto de características, el MACH 6 va más allá para ofrecer los mejores resultados de barrido.</h5>
                                    <p style="text-align: justify;">
                                      Nuestra máquina de gama alta, la MACH 6, es una robusta barredora de volteo alto completamente accionada por sistema hidráulico. Es la única barredora de 156 cm / 61 pulgadas con un sistema de filtración de vacío doméstico, lo que garantiza un control total del polvo y resultados de barrido perfectos.<br><br>
                                      El MACH 6 es resistente, diseñado para funcionar incluso en los entornos más difíciles. Es extremadamente maniobrable, con un sistema de dirección de gama alta que ofrece un control sin esfuerzo. Barrer a una velocidad máxima de 12 km/h / 7,5 mph con un ancho de barrido de 156 cm / 61 pulgadas proporciona una tasa de productividad de 18,720 m² / 201 500 ft² por hora. El MACH 6 garantiza brindar un entorno de trabajo limpio y seguro, rápido.
                                      <h5>Disponible en 2 versiones:</h5>
                                      Versión a batería perfecta tanto para ambientes interiores como exteriores, sin emisiones y funcionamiento silencioso. La potente batería tiene un tiempo de ejecución superior, lo que maximiza la productividad con una sola carga. Combina tracción electrónica con un sistema de volcado hidráulico de varios niveles, lo que crea una máquina sofisticada que ofrece potencia y rendimiento. <br><br>
                                      Motor Kubota de 3 cilindros, tracción delantera completamente hidráulica, aumentando la maniobrabilidad y la potencia. Adecuado para ambientes al aire libre, versátil en todos los terrenos. Increíblemente eficiente, maximiza el tiempo de funcionamiento sin necesidad de cargar.
                                    </p>
                                    <h5>Información clave</h5>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>Fuente de alimentación: batería de 36 V, motor diésel Kubota, motor Kubota de GLP/gasolina.</li>
                                        <li>Uso: Ideal para áreas medianas a grandes.</li>
                                        <li>Ideal para entornos industriales y de limpieza.</li>
                                        <li>Productividad: barra hasta 18 720 m²/201 500 pies² por hora.</li>
                                        <li>Capacidad de la tolva: 236 litros / 62 galones.</li>
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
