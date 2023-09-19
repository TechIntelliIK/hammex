@extends('layout')

@section('title', 'Mach 8')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach 8</li>
        </ol>
        <h2>Mach 8 - La barredora con autoportado, con salida directa hacia adelante y puesto de conducción delantero.</h2>
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
                  <img src="{{ asset('img/portfolio/mach8/mach8-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach8/mach8-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach8/mach8-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach2/mach2-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Mach 8</h3>
              <h5>La MACH 8 reinventa el concepto de barrido</h5>
              <p style="text-align: justify;">
                La barredora industrial MACH 8 es la primera máquina de limpieza del mundo en introducir la tecnología BULLsystem®. Gracias a esta patente, la MACH 8 combina la eficacia del barrido directo hacia delante con la maniobrabilidad y capacidad de carga de una barredora con puesto de conducción delantero. Una nueva solución, para los mejores resultados.
              </p>
              <h5>Versiones disponibles:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>MACH 8 HDK – con motor Kubota de 1.500 cm3, 4 cilindros y 36 hp con refrigeración líquida.</li>
                  <li>MACH 8 HGK LPG – versión gas.</li>
                </ul>
              </p>
              <h5>Aplicaciones:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>FABRICACIÓN INDUSTRIAL: Papeleras, cementeras, vidrieras, fundiciones, ladrilleras, aserraderos, centrales eléctricas, destilerías…</li>
                  <li>LOGÍSTICA: almacenes, hubs logísticos, almacenes de alimentos, puertos y aeropuertos, almacenes de cereales y semillas, mercados mayoristas de frutas y verduras…</li>
                  <li>ÁREAS PÚBLICAS: núcleos urbanos, zonas peatonales, carriles bici, aparcamientos, recintos de conciertos y eventos…</li>
                  <li>OTROS SECTORES: parkings de varias plantas y al aire libre, aeropuertos regionales, hospitales, recintos feriales, centros comerciales, resorts, villas de vacaciones, estadios, polideportivos, parques temáticos y centros de reciclaje.</li>
                </ul>
              </p>
              <h5>Superficies:</h5>
              <p style="text-align: justify;">
                Concreto, porcelanato, pavimentos, concreto con acabado de cuarzo, adoquines, adoquines autoblocantes, pórfido, sanpietrini (adoquines), asfalto y cualquier otro tipo de piso en cualquier condición.
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
                                                  <th scope="col">HDK (diésel)</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Ruta de limpieza con dos cepillos laterales</th>
                                                  <td>2.100mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ruta de limpieza con cepillo lateral</th>
                                                  <td>1.700mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Ruta de limpieza con cepillo principal</th>
                                                  <td>1.270mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del contenedor de suciedad</th>
                                                  <td>500L</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Gran altura de descarga</th>
                                                  <td>1.580mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad de avance</th>
                                                  <td>14,2 km/h</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Rendimiento por hora</th>
                                                  <td>29.820 m²/hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tipo de filtro</th>
                                                  <td>Multibolsillos® / 13 m²</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Control de tracción</th>
                                                  <td>Hidráulico</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">El motor de tracción</th>
                                                  <td>Hidráulico</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor diesel</th>
                                                  <td>Diesel Kubota, 1.500 cm3, 4 cilindros / 36 cv</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (versión básica)</th>
                                                  <td>2.090kg</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensiones: con cepillos laterales (l x an x ​​al)</th>
                                                  <td>2.755 x 2.080 x 2.050 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensiones: sin cepillos laterales (l x an x ​​al)</th>
                                                  <td>2.635 x 1.750 x 2.050 mm</td>
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
                                    <h5>MACH 8</h5>
                                    <p style="text-align: justify;">
                                      La MACH 8 es una barredora potente y resistente, <b>con un amplio recorrido de limpieza</b> (hasta 2100 mm). <br><br>
                                      Es una barredora extremadamente <b>robusta</b> (tanto el chasis como la carrocería de la máquina son de acero) y tiene un alto rendimiento incluso en la recogida de grandes cantidades de polvo y grava. <br><br>
                                      Las <b>características superiores</b> y <b>la capacidad del contenedor</b>y de suciedad (hasta 500 l) hacen de MACH 8 la solución perfecta para <b>limpiar rápidamente grandes áreas extremadamente polvorientas o sucias, en cualquier aplicación</b> , que incluye entornos exigentes como industrias pesadas. <br><br>
                                      El diseño innovador de la MACH 8, la única máquina en el mercado que ofrece <b>barrido directo hacia adelante y una posición de conducción en la parte delantera de la máquina con un sistema de dirección automotriz</b> , hace que esta barredora industrial sea particularmente maniobrable. Esta es una gran ventaja en contextos, donde es necesario realizar la limpieza no solo de forma rápida sino con gran precisión, debido a la presencia de espacios reducidos y congestionados. Por ejemplo, en almacenes logísticos donde las mercancías se mueven constantemente. <br><br>
                                      La MACH 8 es fácil de conducir, con un <b>radio de giro compacto</b> , tiene las dimensiones perfectas para limpiar los pasillos entre una estantería y otra (ancho promedio de 3.000 mm) en los modernos centros logísticos. <br><br>
                                      Lo más destacado del MACH 8 es su <b>capacidad para pasar sobre badenes y gestionar cambios repentinos de pendiente.</b> La nueva máquina de MACH es, de hecho, la única máquina de su clase que ofrece una solución práctica a este problema, una tarea imposible para cualquier otra barredora industrial. <br><br>
                                      Por esta razón, y por el hecho de que la MACH 8 puede <b>superar pendientes del 21 % sin perder potencia</b> , la máquina es muy adecuada para limpiar grandes áreas de estacionamiento (al aire libre, cubiertas y de varios pisos).
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
