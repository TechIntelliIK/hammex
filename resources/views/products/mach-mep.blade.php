@extends('layout')

@section('title', 'Mach Mep')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Mach Mep</li>
        </ol>
        <h2>Mach Mep</h2>
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
                  <img src="{{ asset('img/portfolio/machmep/machmep-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/machmep/machmep-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/machmep/machmep-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Mach Mep</h3>
              <h5>Único en su clase</h5>
              <p style="text-align: justify;">
                Siente el poder del control total del polvo con la tecnología de filtración al vacío de MACH. La MACH MEP es la única barredora manual, inalámbrica y sin batería con un sistema de filtración integrado que ofrece un rendimiento de limpieza increíble y un tiempo de funcionamiento ilimitado.
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
                {{-- <li><strong>Trayectoria de barrido total:</strong> 730 mm / 29 pulgadas</li>
                <li><strong>Productividad:</strong> 2,190 m² / 23,573 pies² por hora</li>
                <li><strong>Dimensión (lxwxh):</strong> 1,296 x 824 x 937 mm / 51 x 32 x 37 pulgadas</li>
                <li><strong>Peso: </strong> 24,5 kg / 54 libras</li>
                <li><strong>Fuente de alimentación:</strong> manual</li>
                <li><strong>Capacidad de la tolva trasera:</strong> 4 L / 1 galón</li>
                <li><strong>Capacidad de la tolva frontal:</strong> 26 L / 7 galones</li>
                <h5><strong>Usos industriales:</strong></h5>
                <li><strong><i class="bx bx-check"></i> <a href="#">Limpieza general</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="#">Agrícultura</a></strong></li> --}}
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
                                                  <td>25,5 kg / 56,2 libras</td>
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
                                              <tr>
                                                  <th scope="row">Tipo de filtro</th>
                                                  <td>cartucho lavable</td>
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
                                    <h5>Potente innovación, la única barredora manual, inalámbrica y sin batería con tecnología de filtración por vacío.</h5>
                                    <p style="text-align: justify;">
                                      El diseño innovador de MACH MEP utiliza nuestro sistema patentado de filtración al vacío. Esta tecnología permite un control completo del polvo durante el barrido, asegurando que su limpieza sea efectiva y segura. La MACH MEP brinda más poder de limpieza que una barredora automática, sin necesidad de baterías, motores o cables, lo que le brinda un rendimiento de barrido óptimo sin problemas. Es la solución inteligente para una limpieza productiva y ecológica. <br><br>
                                      La MACH MEP es una barredora manual de operador a pie ideal para la limpieza de interiores y exteriores en superficies duras y blandas. Es ágil en espacios reducidos y tiene un cepillo lateral ajustable que limpia eficazmente los lugares de difícil acceso. Puede confiar en la fabricación de calidad que utiliza materiales de alta resistencia que hacen que el MACH MEP sea duradero y resistente a los impactos. <br><br>
                                      Cuando se empuja la máquina, ya sea hacia adelante o hacia atrás, las ruedas engranan una caja de engranajes que activa el cepillo principal y el sistema de filtración por aspiración. El funcionamiento manual significa que esta barredora es silenciosa durante el uso y, por lo tanto, es perfecta para entornos sensibles al ruido. <br><br>
                                      Experimenta una limpieza potente en cualquier momento al alcance de tu mano.
                                    </p>
                                    <h5>Información clave</h5>
                                    <p style="text-align: justify;">
                                      <ul>
                                        <li>Fuente de alimentación: Manual.</li>
                                        <li>Uso: Ideal para áreas pequeñas a medianas.</li>
                                        <li>Filtro de agua para agua consistente de alta calidad.</li>
                                        <li>Ideal para aparcamientos, patios, espacios residenciales, espacios comunitarios y almacenes.</li>
                                        <li>Productividad: barra hasta 2100 m²/22 600 pies² por hora.</li>
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
