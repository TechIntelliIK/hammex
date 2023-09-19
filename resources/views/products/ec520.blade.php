@extends('layout')

@section('title', 'EC520')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>EC520</li>
        </ol>
        <h2>EC520</h2>
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
                  <img src="{{ asset('img/portfolio/ec520/ec520-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/ec520/ec520-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/ec520/ec520-3.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/ec520/ec520-4.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>EC520</h3>
              <h5>EC520 es la nueva máquina de limpieza MACH dedicada a la limpieza de escaleras mecánicas y aceras móviles.</h5>
              <p style="text-align: justify;">
                Aún más eficiente y fácil de operar, reemplazó al anterior EC510 a partir de septiembre de 2018. Funciones mejoradas, al mismo precio.
              </p>
              <h5>CAMPOS DE APLICACIÓN</h5>
              <p style="text-align: justify;">
                Centros comerciales, aparcamientos de varias plantas, sistemas de metro, estaciones, aeropuertos, casinos, hoteles y resorts, edificios públicos y privados, supermercados, piezas temáticas, cruceros, museos…
              </p>
              <h5>SUPERFICIES DE LIMPIEZA ADECUADAS</h5>
              <p style="text-align: justify;">
                Escaleras mecánicas, aceras móviles , aceras móviles, aceras móviles, escaleras mecánicas horizontales y superficies pequeñas.
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
                                                  <th scope="col">EC520</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Camino de limpieza (mm)</th>
                                                  <td>510 mm / 20 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Productividad</th>
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
                                                  <th scope="row">Motor</th>
                                                  <td>230 V / 50-60 Hz</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor de cepillo</th>
                                                  <td>900 W / 1,2 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">motor de vacío</th>
                                                  <td>1.200 W / 1,6 CV</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">recogida de agua</th>
                                                  <td>2.100 mm/H²O / 82,7 pulgadas/H²O</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Diámetro del cepillo</th>
                                                  <td>115 mm / 4,5 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Longitud de la escobilla de goma</th>
                                                  <td>780 mm/30,7 pulgadas</td>
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
                                                  <td>109 kg / 240 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensiones: sin escobilla de goma (l x an x ​​al)</th>
                                                  <td>1200 x 580 x 920 mm / 47,2 x 22,8 x 36,2 pulgadas</td>
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
                                    <h5>Mejore la capacidad de limpieza con la tecnología de punta de MACH.</h5>
                                    <p style="text-align: justify;">
                                      El EC520 limpia escaleras mecánicas y pasillos móviles mediante un ciclo de limpieza en seco y húmedo. Es ideal tanto para la limpieza diaria como para eliminar la suciedad incrustada y las marcas más marcadas. <br><br>
                                      El revolucionario sistema de doble cepillo garantiza resultados y una vez en posición, la EC520 funciona automáticamente , dejando libre al operador para dedicar su tiempo a otras tareas. <br><br>
                                      La nueva cámara de vacío de acero inoxidable maximiza además la recogida de agua, dejando los escalones limpios y secos. <br><br>
                                      Los nuevos tanques de solución y recuperación, con mayor capacidad, brindan más tiempo de limpieza, reduciendo la necesidad de parar y rellenar durante la operación y eliminando el tiempo de inactividad asociado. <br><br>
                                      El EC520 limpia escaleras mecánicas y pasillos móviles, de cualquier marca, con un ancho de 51 cm o más . No es necesario detener la escalera mecánica para limpiar con el EC520 y se completa un ciclo de limpieza en cuestión de minutos. <br><br>
                                      La tecnología Edge2Edge® garantiza una limpieza perfecta incluso en los bordes de los escalones. La plataforma del cepillo, que gira 180 grados, está equipada con espaciadores delgados, lo que le permite colocarse en contacto directo con el panel lateral de la escalera mecánica. <br><br>
                                      A pesar de las múltiples funciones y el alto rendimiento que ofrece la EC520, sigue siendo una máquina compacta, por lo que es fácil de transportar sobre sus ruedas y de levantar mediante las asas extraíbles.
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