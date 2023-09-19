@extends('layout')

@section('title', 'Mach 5')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach 5</li>
        </ol>
        <h2>Mach 5</h2>
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
                  <img src="{{ asset('img/portfolio/mach5/mach5-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach5/mach5-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach5/mach5-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach5/mach5-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Mach 5</h3>
              <h5>Una nueva generación de barredoras</h5>
              <p style="text-align: justify;">
                Una barredora hidráulica robusta que se adapta al operador. El diseño compacto, la alta visibilidad y el manejo ligero del MACH 5 permiten maniobrar con confianza en espacios reducidos, mientras que la tecnología de filtración por vacío ofrece una limpieza óptima.
              </p>
              <h5>Eficaz en múltiples superficies:</h5>
              <p style="text-align: justify;">
                Interiores y exteriores, duras y blandas (incluyendo moqueta de bajo perfil).
              </p>
              <h5>Ideal para espacios medianos a grandes:</h5>
              <p style="text-align: justify;">
                Sitios industriales, sitios de construcción, escuelas, oficinas, estaciones, hospitales, espacios públicos, aeropuertos, centros comerciales, tiendas minoristas, almacenes, estacionamientos, espacios residenciales y patios.
              </p>
              <h5>Caracteristicas de seguridad:</h5>
              <p style="text-align: justify;">
                Sensor de seguridad en el asiento del operador, alarma de marcha atrás, luces de seguridad, freno de mano, filtro de aislamiento.
              </p>
              <h5>Características opcionales:</h5>
              <p style="text-align: justify;">
                Tejadillo de protección, luna de PVC, kit cepillo lateral izquierdo.
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
                                                  <th scope="col">MACH 5 EB</th>
                                                  <th scope="col">MACH 5 HDK</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Trayectoria de barrido total</th>
                                                  <td>1.400 mm / 55 pulgadas</td>
                                                  <td>1.400 mm / 55 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Productividad</th>
                                                  <td>11.200 m² / 120.556 pies² por hora</td>
                                                  <td>12.600 m² / 135.626 ft² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensión (lxwxh)</th>
                                                  <td>1.400 x 1.700 x 1.480 mm / 55 x 67 x 58,5 pulgadas</td>
                                                  <td>1.400 x 1.700 x 1.480 mm / 55 x 67 x 58,5 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso</th>
                                                  <td>920 kg / 2023 libras (con batería)</td>
                                                  <td>785 kg / 1731 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuente de alimentación</th>
                                                  <td>batería de 24 V</td>
                                                  <td>motor diésel kubota</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor</th>
                                                  <td>1 x 24 V - 2,7 CV</td>
                                                  <td>Kubota 14cv</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tracción</th>
                                                  <td>asistido electrónicamente</td>
                                                  <td>hidráulico</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>8,0 km/h / 5,5 mph</td>
                                                  <td>9,0 km/h / 5,6 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de la tolva</th>
                                                  <td>150 kg / 331 libras</td>
                                                  <td>150 kg / 331 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tipo de filtro</th>
                                                  <td>filtro de casa de poliéster</td>
                                                  <td>filtro de casa de poliéster</td>
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
                                    <h5>Barredora hidráulica de máximo rendimiento, diseñada para la maniobrabilidad.</h5>
                                    <p style="text-align: justify;">
                                      Experimente un poder de limpieza increíble con el MACH 5. El ancho de barrido de 140 cm / 55 in y la velocidad máxima de 9 km/h / 5,6 mph ofrecen una capacidad de limpieza de hasta 12.600 m² / 135.600 ft² por hora. El MACH 5 es versátil en todos los terrenos; Con un potente control de tracción, puede subir fácilmente pendientes del 20 % y un agarre impresionante garantiza un manejo receptivo.<br><br>
                                      Una de las características de diseño más notables del MACH 5 es que es compacto sin comprometer el rendimiento, proporcionando una maniobrabilidad impresionante durante la operación y la máxima productividad. El radio de giro de 160 cm / 63 pulgadas permite al operador maniobrar con confianza la barredora en espacios reducidos, como pasillos o pasillos estrechos. Mientras que la potente velocidad máxima, el sistema de filtración al vacío y el cepillo MultiBristle ® aseguran una limpieza rápida y una recolección completa de desechos en una sola pasada. El MACH 5 ofrece resultados increíbles, rápido.
                                      <h5>Disponible en 2 versiones:</h5>
                                      Versión Batería EB perfecta tanto para ambientes interiores como exteriores, sin emisiones y funcionamiento silencioso. Combina tracción electrónica con un sistema de volcado hidráulico de varios niveles, lo que crea una máquina sofisticada que ofrece potencia y rendimiento. <br><br>
                                      Motor Kubota de 2 cilindros, tiempo de funcionamiento continuo sin necesidad de recargar. El sistema totalmente hidráulico, incluida la tracción delantera, aumenta la potencia general y la maniobrabilidad. Adecuado para ambientes al aire libre, versátil en todos los terrenos.
                                    </p>
                                    <h5>Información clave</h5>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>Fuente de alimentación: batería de 24 V o motor diésel Kubota.</li>
                                        <li>Uso: Ideal para áreas medianas a grandes.</li>
                                        <li>Ideal para entornos industriales y de limpieza.</li>
                                        <li>Productividad: Barrer hasta 12.600 m² / 135.600 ft² por hora.</li>
                                        <li>Capacidad de la tolva: 150 kg / 331 lbs.</li>
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
