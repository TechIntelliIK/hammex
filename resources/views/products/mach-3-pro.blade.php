@extends('layout')

@section('title', 'Mach 3 pro')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach 3 pro</li>
        </ol>
        <h2>Mach 3 pro</h2>
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
              <h3>Mach 3 pro</h3>
              <h5>La barredora con operador a bordo definitiva</h5>
              <p style="text-align: justify;">
                La barredora más vendida de MACH, robusta, potente e increíblemente productiva con una capacidad de limpieza de 10.140 m²/hora. El MACH 3 PRO está repleto de tecnología innovadora que garantiza un funcionamiento sencillo y la máxima eficiencia.
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
                Encendido con llave, palanca de tracción delantera, aislamiento del sistema de filtración, control de cepillo lateral, freno de mano, asiento de seguridad sensible a la presión, zumbador de marcha atrás, bocina, luces intermitentes.
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
                                                  <th scope="col">MACH 3 E</th>
                                                  <th scope="col">MACH 3 S</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Trayectoria de barrido total</th>
                                                  <td>1.200 mm / 48 pulgadas</td>
                                                  <td>1.200 mm / 48 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Productividad</th>
                                                  <td>9.680 m² / 104,195 pies² por hora</td>
                                                  <td>10,140 m² / 109,146 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensión (lxwxh)</th>
                                                  <td>1.210 x 1.545 x 1.250 mm / 47 x 61 x 49 pulgadas</td>
                                                  <td>1.210 x 1.545 x 1.250 mm / 47 x 61 x 49 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso</th>
                                                  <td>426 kg / 940 lbs (incluida la batería y el cargador)</td>
                                                  <td>340 kg / 750 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuente de alimentación</th>
                                                  <td>batería de 24 V</td>
                                                  <td>motor gasolina honda</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor</th>
                                                  <td>24 V x 1,61 CV</td>
                                                  <td>Honda 6.5 cv</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tracción</th>
                                                  <td>asistido electrónicamente</td>
                                                  <td>hidráulico</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>7,7 km/h / 5 mph</td>
                                                  <td>8,45 km/h / 5,25 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de la tolva</th>
                                                  <td>  85 L / 23 galones</td>
                                                  <td>85 L / 23 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tipo de filtro</th>
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
                                    <h5>Barrido innovador para la máxima productividad.</h5>
                                    <p style="text-align: justify;">
                                      Disponible en 2 modelos:
                                      <ul>
                                        <li>Versión a batería perfecta tanto para ambientes interiores como exteriores, sin emisiones y funcionamiento silencioso. La potente batería tiene un tiempo de ejecución superior, lo que maximiza la productividad con una sola carga.</li>
                                        <li>Motor Honda con tracción delantera hidráulica, aumenta la maniobrabilidad y la potencia. Adecuado para ambientes al aire libre, versátil en todos los terrenos. Increíblemente eficiente, máximo tiempo de funcionamiento sin necesidad de cargar.</li>
                                      </ul>
                                      La MACH 3 PRO es la barredora definitiva que combina calidad, eficiencia y velocidad para ofrecer un rendimiento excepcional. Con un ancho de barrido de 120 cm/47,2 in y una velocidad máxima de 8,5 km/h/5,3 mph, la capacidad de limpieza es de unos impresionantes 10.140 m²/110.000 ft² por hora. <br><br>
                                      Su diseño compacto permite que la MACH 3 PRO sea altamente maniobrable, con un radio de giro de solo 105 cm / 41 in, es perfecta para pasillos estrechos y espacios reducidos inaccesibles para una máquina más grande. Una aspiradora industrial a bordo también proporciona un mayor alcance a través de una varilla larga. <br><br>
                                      Puede confiar en nuestro proceso de fabricación que utiliza materiales y componentes de primera calidad, lo que garantiza confiabilidad, durabilidad y bajo mantenimiento. El MACH 3 PRO es resistente, construido para soportar incluso los entornos más difíciles. La línea Total Steel también está disponible. <br><br>
                                      Nuestro sistema inteligente de filtración por vacío genera un poder de limpieza increíble, brindando una limpieza segura y sin polvo y una productividad óptima. El filtro se limpia fácilmente a través de un sistema de agitación automático, con solo tocar un botón, el operador puede limpiar completamente el filtro sin estar expuesto al polvo.
                                    </p>
                                    <h5>Información clave</h5>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>Fuente de alimentación: batería de 24 V o motor de gasolina Honda.</li>
                                        <li>Uso: Ideal para áreas medianas a grandes.</li>
                                        <li>Ideal para entornos industriales y de limpieza.</li>
                                        <li>Productividad: Barrer hasta 10.140 m² / 110.000 ft² por hora.</li>
                                        <li>Capacidad de la tolva: 85 litros / 23 galones.</li>
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
