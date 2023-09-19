@extends('layout')

@section('title', 'EN GENERAL 5/5/2')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>EN GENERAL 5/5/2</li>
        </ol>
        <h2>EN GENERAL 5/5/2</h2>
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
                  <img src="{{ asset('img/portfolio/tst/overall-5-5-2.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>EN GENERAL 5/5/2</h3>
              <h5>Descripción General</h5>
              <ul>
                <li>¡Excelente para las condiciones más duras! Forrado para mayor comodidad. Repelente al agua y la suciedad en el exterior. Ventilación que se puede abrir en las axilas, puños impermeables y capucha ajustable.</li>
                <li>•    Material exterior: Poliamida Laminada.</li>
                <li>•    Material interior: Malla de poliéster.</li>
                <li>•    Material de protección: Tejido especial que contiene fibra Dyneema®.</li>
                <li>•    Costuras: Selladas.</li>
                <li>•    Instrucciones de lavado: TST Quitagrasas Especial.</li>
                <li>•    Marcado CE: Aprobado según el Reglamento (UE) 2016/425.</li>
              </ul>
              <h5>Dimensionamiento y número de artículo</h5>
              <ul>
                <li><strong>Número de artículo: </strong>56400255000</li>
                <li><strong>TALLAS: </strong>XS, S, METRO, L, SG, 2XL, 3XL</li> <br>
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
                                    <h5>PROOPERADOR PROTECCIÓN DE LIMPIEZA DE ALTA PRESIÓN HASTA 500 BAR</h5>
                                    <p style="text-align: justify;">
                                      Hasta ahora no ha habido una protección adecuada para limpieza a alta presión o fugas de fluidos hidráulicos, y ciertamente no está certificada para alta visibilidad. Nada que se haya adaptado a la potencia de los equipos actuales oa las exigencias de comodidad y funcionalidad de los usuarios. Nuestra experiencia en el chorro de agua con presiones muy altas (hasta 3000 bar) y otros tipos de equipos de protección personal ha sido la base de esta línea de ropa. ProOperator - Limpieza a alta presión y protección de fluidos hidráulicos.
                                    </p>
                                    <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title">Áreas con protección</h5>
                                    <p class="card-text">La tela a rayas identifica claramente las áreas protegidas y las etiquetas indican el nivel de protección. Dado que la limpieza a alta presión y las fugas de fluido hidráulico son muy peligrosas, es esencial que el operador sepa dónde y para qué está protegido.</p>
                                    </div>
                                    <img src="{{ asset('img/portfolio/tst/prooperator/tela1.webp') }}" height="200" class="card-img-bottom" alt="...">
                                    <img src="{{ asset('img/portfolio/tst/prooperator/proteccion1.webp') }}" height="200" class="card-img-bottom" alt="...">
                                    <img src="{{ asset('img/portfolio/tst/prooperator/proteccion1.webp') }}" height="200" class="card-img-bottom" alt="...">
                                    </div><br>
                  <div class="card">
                                    <div class="card-body">
                      <h5 class="card-title">Certificación</h5>
                      <p class="card-text">Todos nuestros productos de protección cuentan con la marca CE. <br> También estamos certificados de acuerdo con las normas ISO 9001:2015 e ISO 14001:2015, herramientas importantes para garantizar la calidad de nuestros productos y nuestro trabajo para sentar las bases de un desarrollo ambiental positivo.</p>
                    </div>
                    <img src="{{ asset('img/portfolio/tst/prooperator/certificacion.webp') }}" height="200" class="card-img-bottom" alt="...">
                  </div><br>
                                    <h5>DYNEEMA® ¡La fibra más fuerte del mundo!</h5>
                                    <p style="text-align: justify;">
                                      Dyneema® es la fibra más fuerte del mundo (15 veces más fuerte que el acero en peso por peso). Esto hace posible ofrecer altos niveles de protección contra los peligros de los chorros de agua, incluso con telas livianas.
                                    </p>
                                    <div class="card">
                                    <div class="card-body">
                      <h5 class="card-title">Alta visibilidad – EN ISO 20471:2013</h5>
                      <p class="card-text">Existe una demanda creciente de Equipos de Protección Individual de Alta Visibilidad y por ello TST decidió desarrollar y certificar una serie de prendas para tal fin. Se mantuvieron todas las buenas cualidades de protección y los detalles funcionales de los productos ProOperator regulares, y se agregaron los detalles de alta visibilidad requeridos. ¡El resultado es ropa extremadamente funcional, con excelente comodidad! La gran apariencia es un efecto secundario agradable: limpieza de alta presión de alta visibilidad y protección de fluido hidráulico.</p>
                    </div>
                  </div><br>
                  <div class="card">
                                    <div class="card-body">
                      <h5 class="card-title">Impermeable</h5>
                      <p class="card-text">El material exterior en un laminado de 2 capas resiste mejor el agua y la suciedad. Esto mantiene al operador más seco y liviano, y la ropa es fácil de limpiar. Varios productos también tienen cremalleras impermeables con solapas superpuestas. ¡Excelente para las condiciones más duras!.</p>
                    </div>
                    <img src="{{ asset('img/portfolio/tst/prooperator/impermeable.webp') }}" height="200" class="card-img-bottom" alt="...">
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