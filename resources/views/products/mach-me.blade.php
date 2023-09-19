@extends('layout')

@section('title', 'Mach Me')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach Me</li>
        </ol>
        <h2>Mach Me</h2>
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
                  <img src="{{ asset('img/portfolio/machme/machme-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/machme/machme-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/machme/machme-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Mach Me</h3>
              <h5>¡Barre conmigo!</h5>
              <p style="text-align: justify;">
                MACH ME es el primer paso hacia una productividad increíble y una limpieza sin esfuerzo. Es 10 veces más rápido que usar una escoba manual y brinda resultados impresionantes todos los días, lo que le ahorra tiempo y costos.
              </p>
              <h5>Eficaz en múltiples superficies:</h5>
              <p style="text-align: justify;">
                Interiores y exteriores, duras y blandas (incluyendo moqueta de bajo perfil).
              </p>
              <h5>Ideal para espacios pequeños a medianos:</h5>
              <p style="text-align: justify;">
                Almacenes, sitios industriales, sitios de construcción, escuelas, oficinas, estaciones, hospitales, espacios públicos, aeropuertos, centros comerciales, tiendas minoristas, estacionamientos, espacios residenciales y patios.
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
                                                  <th scope="col">Especificación</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <th scope="row">Trayectoria de barrido total</th>
                                                  <td>730 mm / 29 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Productividad</th>
                                                  <td>2,190 m² / 23,573 pies² por hora</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Dimensión (lxwxh)</th>
                                                  <td>1,296 x 824 x 937 mm / 51 x 32 x 37 pulgadas</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Peso</th>
                                                  <td>24,5 kg / 54 libras</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Fuente de alimentación</th>
                                                  <td>manual</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de la tolva trasera</th>
                                                  <td>4 L / 1 galón</td>
                                              </tr>
                                              <tr>
                                                  <th scope="row">Capacidad de la tolva frontal</th>
                                                  <td>26 L / 7 galones</td>
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
                                    <h5>Una barredora de operador a pie manual versátil, diseñada para usted.</h5>
                                    <p style="text-align: justify;">
                                      El MACH ME es una solución inteligente para limpiar de manera simple y efectiva, sin batería ni cable, es versátil y confiable. Su diseño simple y robusto es ágil en espacios reducidos y un cepillo lateral ajustable limpia eficazmente lugares de difícil acceso. Es tan simple de usar que no se requiere experiencia, lo que la convierte en la primera máquina perfecta para comprar para una limpieza eficiente en interiores y exteriores en superficies duras y blandas. <br><br>
                                      La MACH ME tiene una característica importante y única: se puede usar tanto en dirección hacia adelante como hacia atrás gracias a las tolvas dobles en la parte delantera y trasera, lo que proporciona la máxima flexibilidad al barrer. Puede confiar en nuestro proceso de fabricación que utiliza materiales resistentes, lo que hace que la barredora sea duradera y extremadamente resistente a los impactos. La MACH ME está diseñada para trabajar con usted todos los días, ahora y para siempre.
                                    </p>
                                    <h5>Información clave</h5>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>Fuente de alimentación: Manual.</li>
                                        <li>Uso: Ideal para áreas pequeñas a medianas.</li>
                                        <li>Filtro de agua para agua consistente de alta calidad.</li>
                                        <li>Ideal para aparcamientos, patios, espacios residenciales, espacios comunitarios y almacenes</li>
                                        <li>Productividad: Barrer hasta 2.100 m² / 22.600 ft² por hora.</li>
                                        <li>Capacidad de la tolva: 26 litros / 6 galones.</li>
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
