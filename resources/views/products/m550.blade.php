@extends('layout')

@section('title', 'M550')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>M550</li>
        </ol>
        <h2>M550</h2>
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
                  <img src="{{ asset('img/portfolio/m550/m550-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/m550/m550-2.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>M550</h3>
              <h5>El enfoque compacto para conducir un cepillo ancho</h5>
              <p style="text-align: justify;">
                Una fregadora automática profesional de conductor acompañante, ideal para la limpieza de alta frecuencia en entornos concurridos. El M550 combina un diseño compacto con un amplio recorrido de limpieza, lo que brinda una productividad impresionante sin comprometer la maniobrabilidad.
              </p>
              <h5>VERSIONES DISPONIBLES:</h5>
              <p style="text-align: justify;">
                <ul>
                  <li>•  M550 B (batería de 24 V).</li>
                  <li>•  M550 B TRAC (Trac automático).</li>
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
                                                  <th scope="col">M550 B (batería)</th>
                                                  <th scope="col">M550 B TRAC</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>550 mm / 21 pulgadas</td>
                                                  <td>550 mm / 21 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>2.200 m² / 25.450 pies² por hora</td>
                                                  <td>2.200 m² / 25.450 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>50 L / 13,2 galones</td>
                                                  <td>50 L / 13,2 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>40 L / 10,6 galones</td>
                                                  <td>40 L / 10,6 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuerza</th>
                                                  <td>24V</td>
                                                  <td>24V</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>cepillo asistido</td>
                                                  <td>cepillo asistido</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">presión del cepillo</th>
                                                  <td>44 kg / 97 libras</td>
                                                  <td>45 kg / 99 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor cepillo (hp)</th>
                                                  <td>1.0</td>
                                                  <td>1.0</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor cepillo (rpm)</th>
                                                  <td>180</td>
                                                  <td>180</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Motor de aspiración (hp)</th>
                                                  <td>0,64</td>
                                                  <td>0,64</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">elevador de agua sellado</th>
                                                  <td>1250 mm/49,2 pulgadas</td>
                                                  <td>1250 mm/49,2 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Nivel de sonido</th>
                                                  <td>68 dBA</td>
                                                  <td>68 dBA</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Sistema DoseMatic®</th>
                                                  <td>opcional</td>
                                                  <td>estándar</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño (con escobilla de goma)</th>
                                                  <td>1200 x 830 x 960 mm / 47,2 x 32,7 x 37,8 pulgadas</td>
                                                  <td>1200 x 830 x 960 mm / 47,2 x 32,7 x 37,8 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso (sin baterías)</th>
                                                  <td>78,5 kg / 173 libras</td>
                                                  <td>83,5 kg / 184 libras</td>
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
                                    <h5>Productividad seria en un diseño compacto; simplifica la limpieza diaria con un presupuesto reducido con el M550.</h5>
                                    <p style="text-align: justify;">
                                      ¿Qué hace que el M550 sea tan especial? Es una fregadora automática compacta equipada con un cabezal de cepillo ancho, lo que significa que obtiene una productividad inigualable sin comprometer la maniobrabilidad. Su recorrido de limpieza de 550 mm / 21 pulgadas ofrece una tasa de productividad de hasta 2365 m² / 25 450 ft² por hora; el M550 es la solución económica para una limpieza profesional y eficiente.<br><br>
                                      El M550 es parte de nuestra línea 'Mecánica', diseñada específicamente con controles sencillos y sin componentes electrónicos. ¿Los beneficios? Capacitación mínima, fácil operación y bajo mantenimiento. El M550 está disponible en dos versiones: <br><br>
                                      M 550 B: transmisión asistida por cepillo y batería de 24 V para mayor simplicidad y economía. <br><br>
                                      M 550 B TRAC: tracción totalmente automática para un manejo aún más fácil.
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