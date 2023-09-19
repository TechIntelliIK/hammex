@extends('layout')

@section('title', 'Mach 2')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach 2</li>
        </ol>
        <h2>Mach 2</h2>
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
                  <img src="{{ asset('img/portfolio/mach2/mach2-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach2/mach2-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/mach2/mach2-3.webp') }}" alt="">
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
              <h3>Mach 2</h3>
              <h5>El punto de inflexión</h5>
              <p style="text-align: justify;">
                Combinando la maniobrabilidad de una barredora de conductor acompañante con la productividad de una barredora con conductor sentado. La MACH 2 es la simplicidad en su máxima expresión, una barredora económica y fiable que ofrece una limpieza sin concesiones.
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
                                                  <th scope="col">Especificación</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Trayectoria de barrido total</th>
                                                  <td>1,055 mm / 42 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Productividad</th>
                                                  <td>5.800 m² / 62,431 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensión (lxwxh)</th>
                                                  <td>1,055 x 1,380 x 1,215 mm / 41,5 x 54,5 x 48 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso</th>
                                                  <td>232 kg / 520 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuente de alimentación</th>
                                                  <td>asistido electrónicamente</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor principal</th>
                                                  <td>1 x 24 V - 0,8 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir motor</th>
                                                  <td>24 V - 0,6 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tracción delantera</th>
                                                  <td>5,5 km/h / 3,5 mph</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de la tolva</th>
                                                  <td>62 L / 16 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tipo de filtro</th>
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
                                    <h5>El punto de inflexión en el barrido, el MACH 2 es una solución innovadora y económica para transformar la forma en que limpia.</h5>
                                    <p style="text-align: justify;">
                                      ELa MACH 2 es la primera de su tipo y contiene todas las características esenciales de una barredora con conductor sentado sin ser demasiado complicada. Alta productividad con bajos costes de funcionamiento, es la solución económica a sus necesidades de limpieza. <br><br>
                                      Su diseño compacto permite que la MACH 2 sea altamente maniobrable, con un radio de giro de solo 95 cm / 37 pulgadas, es perfecta para pasillos estrechos y espacios reducidos inaccesibles para una máquina más grande. El MACH 2 funciona con baterías y sin emisiones, y se adapta bien a ambientes interiores, superficies duras y alfombras. <br><br>
                                      El control completo está al alcance de su mano, el MACH 2 es el mejor amigo del operador. El diseño del manillar permite una dirección ligera y la aceleración se controla mediante una palanca en el manillar. El panel de control intuitivo está equipado con características clave y el mantenimiento es simple con una cubierta trasera que se abre completamente y brinda acceso a las partes internas. <br><br>
                                      El MACH 2 genera un poder de limpieza increíble, gracias a nuestro sistema inteligente de filtración por aspiración, que ofrece una limpieza segura y sin polvo y una productividad óptima. El filtro se limpia fácilmente mediante un sistema de agitación mecánica, lo que garantiza una larga vida útil y un bajo mantenimiento.
                                    </p>
                                    <h5>Información clave</h5>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>Fuente de alimentación: batería de 24 V</li>
                                        <li>Uso: Ideal para áreas pequeñas a medianas.</li>
                                        <li>Ideal para entornos industriales y de limpieza</li>
                                        <li>Productividad: Barrer hasta 5.800 m² / 62.431 ft² por hora.</li>
                                        <li>Capacidad de la tolva: 62 litros / 16 galones.</li>
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
