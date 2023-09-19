@extends('layout')

@section('title', 'EC510')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>EC510</li>
        </ol>
        <h2>EC510</h2>
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
                  <img src="{{ asset('img/portfolio/ec510/ec510-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/ec510/ec510-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/ec510/ec510-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>EC510</h3>
              <h5>La manera fácil de revivir las escaleras mecánicas.</h5>
              <p style="text-align: justify;">
                El revolucionario EC510 lo está cambiando todo. Limpie sin esfuerzo las escaleras mecánicas y las pasarelas móviles en menos de una hora, utilizando un ciclo de barrido en seco y de fregado en húmedo para eliminar de forma eficaz incluso los residuos más difíciles. Innovador y con un precio competitivo, le dejará boquiabierto y no su presupuesto.
              </p>
              <h5>CAMPOS DE APLICACIÓN</h5>
              <p style="text-align: justify;">
                Centros comerciales, tiendas minoristas, subterráneos, estaciones de tren, aeropuertos, casinos, hoteles y resorts, edificios de oficinas.
              </p>
              <h5>SUPERFICIES DE LIMPIEZA ADECUADAS</h5>
              <p style="text-align: justify;">
                Escaleras mecánicas, pasillo rodante y áreas de piso duro.
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
                                                  <th scope="col">EC510</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>510 mm / 20 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de limpieza</th>
                                                  <td>1.000 m² / 10.764 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de recuperación</th>
                                                  <td>35 L / 9,2 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad del tanque de solución</th>
                                                  <td>35 L / 9,2 galones</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Conducir</th>
                                                  <td>230 V / 50-60 Hz</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor de cepillo</th>
                                                  <td>900 W / 1,2 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor de vacío</th>
                                                  <td>700 W / 0,9 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Potencia de vacío</th>
                                                  <td>2.100 mm/H²O / 82,7 pulgadas/H²O</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Longitud del cepillo</th>
                                                  <td>510 mm / 20 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Longitud de la escobilla de goma</th>
                                                  <td>870 mm/34,3 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Velocidad del cepillo</th>
                                                  <td>400 rpm</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">presión del cepillo</th>
                                                  <td>30 kg / 66,1 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso</th>
                                                  <td>96 kg / 212 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Tamaño: escobilla de goma incluida (largo x ancho x alto)</th>
                                                  <td>1200 x 580 x 970 mm / 47,2 x 22,8 x 38,2 pulgadas</td>
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
                                    <h5>La nueva forma de limpiar las escaleras mecánicas.</h5>
                                    <p style="text-align: justify;">
                                      El EC510 es un limpiador de escaleras mecánicas profesional diseñado para limpiar sin esfuerzo cualquier marca, tamaño o estilo de escaleras mecánicas y pasillos rodantes, en menos de una hora. Trabaje en los modos de barrido en seco y fregado húmedo, fregando profundamente y secando los pasos mientras la escalera mecánica está en movimiento. <br><br>
                                      El exclusivo sistema de doble cepillo levanta y elimina de forma agresiva la grasa, las piedras, los derrames y la suciedad pisada, mientras que una potente aspiradora garantiza la recogida completa de agua y escombros, dejando la escalera mecánica perfectamente limpia y lista para usar. El EC510 es ideal para la restauración de escaleras mecánicas descuidadas y la limpieza de mantenimiento regular. <br><br>
                                      La máquina es segura y fácil de usar, con controles sencillos de un solo toque y, una vez configurada, puede funcionar de forma independiente, dejando al operador libre para continuar con otro trabajo. El EC510 está diseñado ergonómicamente para la máxima comodidad del operador y su diseño compacto lo hace increíblemente fácil de transportar. <br><br>
                                      Una escalera mecánica sucia resta valor a la estética del edificio, afecta la opinión del cliente y es susceptible de sufrir daños, lo que genera mantenimiento, tiempo de inactividad de la escalera mecánica y costos adicionales. La limpieza regular de las escaleras mecánicas extenderá la vida útil y agregará valor a su negocio. Hágalo con la EC510, la máquina que está revolucionando la limpieza de escaleras mecánicas. <br><br>
                                      Tenga en cuenta:  <br>
                                      a partir de septiembre de 2018, el EC510 ha sido reemplazado por el  nuevo limpiador de escaleras mecánicas EC520 .
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