@extends('layout')

@section('title', 'M500')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M500</li>
        </ol>
        <h2>M500</h2>
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
                  <img src="{{ asset('img/portfolio/m500/m500-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m500/m500-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m500/m500-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M500</h3>
              <h5>Descubre el poder industrial escondido dentro</h5>
              <p style="text-align: justify;">
                Una fregadora automática profesional de operador a pie. El diseño compacto del M500 permite un fácil acceso a espacios reducidos, lo que lo hace ideal para la limpieza de alta frecuencia en entornos concurridos.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  M500 B (batería de 24 V).</li>
                  <li>•  M500 B TRAC (mecánica sin electrónica).</li>
                  <li>•  M500 C (alimentado por cable - tiempo de funcionamiento ilimitado).</li>
                </ul>
              </p>
              <h5>CAMPOS DE APLICACIÓN</h5>
              <p style="text-align: justify;">
                Restaurantes, cocinas, piscinas, vestuarios, cafés y bares, hospitales, clubes, pequeñas fábricas, supermercados, farmacias y muchas más áreas de tamaño pequeño a mediano.
              </p>
              <h5>SUPERFICIES DE LIMPIEZA ADECUADAS</h5>
              <p style="text-align: justify;">
                Baldosas de cerámica, mármol, cemento, linóleo, gres porcelánico, suelos de goma, sobre cualquier tipo de suciedad.
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
                                                  <th scope="col">M500 B (batería)</th>
                                                  <th scope="col">M500 B TRAC (Tracción)</th>
                                                  <th scope="col">M500C (alimentado por cable)</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Ruta de limpieza</th>
                                                  <td>500mm</td>
                                                  <td>500mm</td>
                                                  <td>500mm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>2.000 m² / 23.140 pies² por hora</td>
                                                  <td>2.000 m² / 23.140 pies² por hora</td>
                                                  <td>2.000 m² / 23.140 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>50 L / 13,2 galones</td>
                                                  <td>50 L / 13,2 galones</td>
                                                  <td>50 L / 13,2 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuerza</th>
                                                  <td>24V</td>
                                                  <td>24V</td>
                                                  <td>230 V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>cepillo asistido</td>
                                                  <td>automático</td>
                                                  <td>cepillo asistido</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">presión del cepillo</th>
                                                  <td>37 kg /82 libras</td>
                                                  <td>37 kg /82 libras</td>
                                                  <td>37 kg /82 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor de cepillo</th>
                                                  <td>0,8 caballos de fuerza</td>
                                                  <td>0,8 caballos de fuerza</td>
                                                  <td>0,55 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor de vacío</th>
                                                  <td>180 rpm</td>
                                                  <td>180 rpm</td>
                                                  <td>150 rpm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor de vacío</th>
                                                  <td>0,64 CV</td>
                                                  <td>0,64 CV</td>
                                                  <td>0,70 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">elevador de agua sellado</th>
                                                  <td>1.250 mm / 49 pulgadas</td>
                                                  <td>1.250 mm / 49 pulgadas</td>
                                                  <td>2.100 mm / 49 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Nivel de sonido</th>
                                                  <td>68 dBA</td>
                                                  <td>68 dBA</td>
                                                  <td>68 dBA</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Sistema DoseMatic</th>
                                                  <td>opcional</td>
                                                  <td>estándar</td>
                                                  <td>opcional</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (con escobilla de goma)</th>
                                                  <td>1200 x 830 x 960 mm / 47,2 x 32,7 x 37,8 pulgadas</td>
                                                  <td>1200 x 830 x 960 mm / 47,2 x 32,7 x 37,8 pulgadas</td>
                                                  <td>1200 x 830 x 960 mm / 47,2 x 32,7 x 37,8 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (sin baterías)</th>
                                                  <td>73 kg / 161 libras</td>
                                                  <td>78 kg / 161 libras</td>
                                                  <td>71,8 kg / 161 libras</td>
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
                                    <h5>Tecnología industrial en un diseño compacto; simplifica la limpieza diaria con un presupuesto reducido con el M500.</h5>
                                    <p style="text-align: justify;">
                                      La M500 es una fregadora automática de operador a pie perfectamente adaptada para la limpieza diaria de entornos de mucho tráfico. Su recorrido de limpieza de 500 mm ofrece una impresionante tasa de productividad de 2150 m² / 23 150 pies² por hora, mientras que el diseño compacto permite un fácil acceso a espacios reducidos. Un potente motor genera la presión de cepillo más alta del mercado en una máquina de 500 mm, lo que ofrece resultados fantásticos. Déjese sorprender por la M500, la fregadora automática de uso diario con potencia de limpieza industrial.<br><br>
                                      El M500 es parte de nuestra línea 'Mecánica', diseñada específicamente con controles sencillos y sin componentes electrónicos. ¿Los beneficios? Capacitación mínima, fácil operación y bajo mantenimiento. El M500 está disponible en tres versiones: <br><br>
                                      <ul>
                                        <li>M500 B: accionamiento asistido por cepillo y batería de 24 V para simplificar y ahorrar.</li>
                                        <li>M500 B TRAC: tracción totalmente automática para un manejo aún más fácil.</li>
                                        <li>M500 C: alimentado por cable para un tiempo de funcionamiento ilimitado.</li>
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