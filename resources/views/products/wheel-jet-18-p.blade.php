@extends('layout')

@section('title', 'Wheel Jet 18 p')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Wheel Jet 18 p</li>
        </ol>
        <h2>Wheel Jet 18 p</h2>
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
                  <img src="{{ asset('img/portfolio/wheel-jet-18-p/wheel-jet-18-p.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-18-p/wheel-jet-18-p-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-18-p/wheel-jet-18-p-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/wheel-jet-18-p/wheel-jet-18-p-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Wheel Jet 18 p</h3>
              <ul>
                <li><strong>Tipo:</strong> de agua fría</li>
                <li><strong>Tipo de alimentación:</strong> trifásico</li>
                <li><strong>Configuración:</strong> móvil</li>
                <li><strong>Otras características: </strong> de alta presión</li>
                <li><strong>Motor:</strong> de gasolina</li>
                <li><strong>SKU:</strong> g365</li>
                <li><strong>Categorías:</strong> Electrico, Falch</li>
                <li><strong>Etiquetas:</strong> alta presión, móvil</li><br>
                <h5><strong>Usos industriales:</strong></h5>
                <li><strong><i class="bx bx-check"></i> <a href="#">Limpieza general</a></strong></li>
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
                                                  <td>8 – 18 l/min</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">temperatura del agua</th>
                                                  <td>optional</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor gasolina potencia max./ potencia de salida, velocidad de funcionamiento, régimen del ralentí, cilindros, capacidad, sistema de refrigeración</th>
                                                  <td>23 kw / 17,9 kw, 2750 rpm, 2100 rpm, 2 cyl., 895 ccm, air</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">consumo de combustible sobre carga del 60%</th>
                                                  <td>4,5 l/h petrol</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">rendimiento, velocidad de bombeo, presión del agua de entrada, max. temperatura del agua de entrada</th>
                                                  <td>18 kw, 1085 rpm, 2,0 – 8,0 bar, 40 °c</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">tamaño de la boquilla estándar</th>
                                                  <td>035 us gal/min</td>
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
                                                  <th scope="row">capacidad del tanque de combustiblel</th>
                                                  <td>70 l</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">peso neto, carga vertical</th>
                                                  <td>225 kg, –</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">largo x ancho x altura</th>
                                                  <td>1450 × 790 × 1155 mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">nivel de ruido lpa, lwa + 1,5 db</th>
                                                  <td>85, 103 db</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">número del artículo</th>
                                                  <td>g365</td>
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
                                    <p style="text-align: justify;">Hidrolavadora de alta presión de chorro de agua, presión de funcionamiento – 500 bar, 18 l / min, motor de gasolina</p>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>El marco de seguridad de acero para protección contra daños y tiempos muertos también simplifica el transporte y la seguridad en los vehículos.</li>
                                        <li>Ruedas de goma maciza (resistentes al desgaste, de bajo mantenimiento) para facilitar el movimiento, así como para facilitar la carga y descarga en vehículos.</li>
                                        <li>Filtro de agua para agua consistente de alta calidad.</li>
                                        <li>Bomba de pistón de baja velocidad para máxima reserva de potencia y durabilidad. Los costos de servicio y mantenimiento se reducen mediante el uso de materiales y componentes de alta calidad. El diseño simple y robusto de la bomba permite el reemplazo fácil y económico de piezas de desgaste incluso después de años de uso. Presión de trabajo continuamente ajustable.</li>
                                        <li>Control de presión para más potencia, más seguridad y menos desgaste. Sistema de control de presión Falch patentado para un control de presión infinitamente variable. Incluye arranque suave. Alivio de presión en las mangueras durante los descansos en funcionamiento, lo que aumenta la vida útil de las boquillas y accesorios.</li>
                                        <li>Motor de gasolina de 2 cilindros refrigerado por aire, volumen 895 cm³, 23 kW, con reserva de marcha para un funcionamiento 100% continuo.</li>
                                        <li>Depósito de combustible sin costura moldeado en plástico. Gran volumen para largos intervalos de repostaje. Seguro porque – resistente a los golpes y no sujeto a corrosión.</li>
                                        <li>El arrancador eléctrico es conveniente y simple.</li>
                                        <li>Seguridad / control: para la seguridad del sistema en su conjunto, algunos componentes se instalan con un margen de seguridad que excede los requisitos de seguridad. El control funciona sin ningún componente electrónico para evitar fallas causadas por vibraciones, humedad y frío</li>
                                        <li>El contador para controlar un tiempo de funcionamiento de horas por hora e intervalos de servicio.</li>
                                        <li>Manguera de alta presión Falch sin parar 5, 30 m, 500 bar, 155 ° C, diámetro interno 10 mm – 2/3 menos pérdida de presión en comparación con una manguera de 8 mm, 2 cubiertas de acero proporcionan resistencia adicional sin costos de reparación. El exclusivo acoplador rápido de acero inoxidable ahorra tiempos de conexión / desconexión del tronco incluso después de varios años de uso. Una bobina de almacenamiento ahorra una tonelada de tiempo y espacio.</li>
                                        <li>Pistola de alta presión Falch gun 5, con un servoamplificador y una aguja conveniente para limpiar las boquillas, garantiza un funcionamiento a largo plazo por parte del operador sin dolor en las manos y las articulaciones.</li>
                                        <li>Pico para trabajo conveniente en espacios limitados. Debido al refuerzo en el mango y la tubería de metal, la tubería no se dobla y la conexión roscada (acero inoxidable) no se daña incluso si se cae accidentalmente.</li>
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
