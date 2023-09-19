@extends('layout')

@section('title', 'Kränzle B 270 T')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>Kränzle B 270 T</li>
        </ol>
        <h2>Kränzle B 270 T</h2>
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
                  <img src="{{ asset('img/portfolio/b-270-t/b-270-t.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/b-270-t/b-270-t-1.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/b-270-t/b-270-t-2.webp') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('img/portfolio/b-270-t/b-270-t-3.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Kränzle B 270 T</h3>
              <ul>
                <li><strong>Presión de trabajo ajustable bar / MPa:</strong> 30-250 / 3-25</li>
                <li><strong>Max. barra de sobrepresión admisible / MPa:</strong> 270/27</li>
                <li><strong>Salida de agua l / min y l / h:</strong> 16/960</li>
                <li><strong>Motor:</strong> Honda GX390 LX</li>
                <li><strong>Ajuste de velocidad (SA)</strong></li>
                <li><strong>Dimensiones (L x W x H) mm:</strong>  720 x 570 x 960</li>
                <li><strong>Peso (kg):</strong>  93</li>
                <li><strong>SKU:</strong> B270T</li>
                <li><strong>Categorías:</strong> Agua fria, Kränzle</li>
                <li><strong>Etiquetas:</strong> agua fría, alta presión, gasolina, hidrolavadora</li><br>
                <h5><strong>Usos industriales:</strong></h5>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción</a></strong></li>
                <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
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
                                    Descripción
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <div>
                                    <p style="text-align: justify;">El B 270 T es un diseño excelente, es fácil de mover, está bien protegido, tiene receptáculos de almacenamiento para los accesorios e incluye una manguera de alta presión de 20 M que se enrolla en el carrete de manguera integral. Uso continuo sugerido: completo , uso diario. Fantástico para tareas de limpieza exigentes donde no es posible conectarse a un suministro eléctrico. Diseño duradero para uso industrial y comercial.</p>
                                    <strong>Características y beneficios:</strong>
                                    <ul style="text-align: justify;">
                                      <li>Sistema de almacenamiento ordenado, práctico estiba de la pistola con gatillo de seguridad y lanza.</li>
                                      <li>Regulación de presión, control totalmente ajustable que permite ajustar las presiones de operación para adaptarse a cualquier tarea.</li>
                                      <li>El ajuste de velocidad (SA), la regulación automática de la velocidad del motor ayuda a reducir el consumo de combustible.</li>
                                      <li>Protección contra impactos</li>
                                      <li>Tambor de manguera integrado, diseño práctico y presenta una manguera de alta presión larga con manivela plegable</li>
                                      <li>Cubierta de protección, protección contra el calor</li>
                                      <li>Motor Honda compatible con el servicio, con protección integrada contra la falta de aceite.</li>
                                    </ul>
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
