
@extends('layout')

@section('title', 'CHALECO 10/28')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
          <li>CHALECO 10/28</li>
        </ol>
        <h2>CHALECO 10/28</h2>
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
                  <img src="{{ asset('img/portfolio/tst/jacket-w-hand-protections-10-28.webp') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>CHALECO 10/28</h3>
              <h5>Descripción General</h5>
              <ul>
                <li>El chaleco ofrece una protección eficaz y un confort óptimo. A menudo se utiliza en combinación con la protección para la cabeza 20/30, las protecciones para las manos, los pantalones, el mono y las polainas o las botas 3000.</li>
                <li>•    Material exterior: Poliamida Laminada.</li>
                <li>•    Material interior: Malla de poliéster.</li>
                <li>•    Material de protección: Tejido especial que contiene fibra Dyneema®.</li>
                <li>•    Costuras: Selladas.</li>
                <li>•    Instrucciones de lavado: TST Quitagrasas Especial.</li>
                <li>•    Marcado CE: Aprobado según el Reglamento (UE) 2016/425.</li>
              </ul>
              <h5>Dimensionamiento y número de artículo</h5>
              <ul>
                <li><strong>Número de artículo: </strong>5120047</li>
                <li><strong>TALLAS: </strong>M-2XL</li> <br>
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
                                    <h5>EQUIPOS DE PROTECCIÓN AVANZADOS PARA CHORRO DE AGUA</h5>
                                    <p style="text-align: justify;">
                                      Desde que desarrollamos nuestra primera colección de ropa protectora para chorro de agua en 1994, hemos consultado a usuarios finales de todo el mundo. Nuestro objetivo es ofrecer una amplia gama de equipos de protección con características técnicamente avanzadas, alto nivel de comodidad y alta calidad. TST® fue el primero en ofrecer productos con marcado CE para protección contra chorro de agua y es un desafío mantenerse al día con el desarrollo técnico de bombas y accesorios, y con las demandas de los usuarios. Para mejorar aún más nuestros productos, utilizamos tejidos especiales que contienen la fibra más resistente del mundo: la fibra Dyneema®. ¡Ser un licenciatario oficial de DSM Dyneema nos brinda, y a usted, una gran ventaja para el futuro!
                                    </p>
                                    <div class="card">
                                    <div class="card-body">
                      <h5 class="card-title">Áreas con protección</h5>
                      <p class="card-text">La tela a rayas (10/28) y brillante (20/30) identifica claramente las áreas protegidas y las etiquetas indican el nivel de protección. Dado que la limpieza a alta presión es muy peligrosa, es fundamental que el operador sepa dónde y para qué está protegido.</p>
                    </div>
                    <img src="{{ asset('img/portfolio/tst/tela1.webp') }}" height="200" class="card-img-bottom" alt="...">
                    <img src="{{ asset('img/portfolio/tst/tela2.webp') }}" height="200" class="card-img-bottom" alt="...">
                  </div><br>
                  <div class="card">
                                    <div class="card-body">
                      <h5 class="card-title">Certificación</h5>
                      <p class="card-text">Todos nuestros productos de protección cuentan con la marca CE. También estamos certificados de acuerdo con las normas ISO 9001:2015 e ISO 14001:2015, herramientas importantes para garantizar la calidad de nuestros productos y nuestro trabajo para sentar las bases de un desarrollo ambiental positivo.</p>
                    </div>
                    <img src="{{ asset('img/portfolio/tst/certificacion.webp') }}" height="200" class="card-img-bottom" alt="...">
                  </div><br>
                                    <h5>Demolición pesada de hormigón</h5>
                                    <p style="text-align: justify;">
                                      50% MÁS FUERTE CONTRA LA ABRASIÓN Y EL DESGARRO <br>
                                      El material exterior HD es TECHSTEEL™ extremadamente duradero, que es un 50 % más resistente a la abrasión y al desgarro. La solicitud de estas calidades proviene originalmente de la industria de remoción y demolición de concreto.
                                    </p>
                                    <div class="card">
                                    <div class="card-body">
                      <h5 class="card-title">Nivel de protección: amarillo y naranja</h5>
                      <p class="card-text">La etiqueta amarilla indica protección para chorro único de 1000 bar/15000 psi y chorro de rotor de 2800 bar/40000 psi – 10/28. <br><br>
                                        La etiqueta naranja indica protección para chorro único de 2000 bar/30000 psi y chorro de rotor de 3000 bar/43500 psi – 20/30.</p>
                    </div>
                    <img src="{{ asset('img/portfolio/tst/proteccion1.webp') }}" height="200" class="card-img-bottom" alt="...">
                    <img src="{{ asset('img/portfolio/tst/proteccion2.webp') }}" height="200" class="card-img-bottom" alt="...">
                  </div><br>
                  <div class="card">
                                    <div class="card-body">
                      <h5 class="card-title">Ventilación</h5>
                      <p class="card-text">Llevamos la comodidad al siguiente nivel introduciendo la opción Ventilación en Pantalones y Overol. Esto mejora la comodidad cuando se trabaja en ambientes cálidos. <br><br>
                                      Busque el símbolo de caliente a frío.</p>
                    </div>
                    <img src="{{ asset('img/portfolio/tst/calientefrio.webp') }}" height="200" class="card-img-bottom" alt="...">
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