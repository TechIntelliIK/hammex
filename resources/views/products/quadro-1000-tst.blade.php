@extends('layout')

@section('title', 'Quadro 1000 TST')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
                <li>Quadro 1000 TST</li>
            </ol>
            <h2>Quadro 1000 TST</h2>
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
                                <img src="{{ asset('img/portfolio/Quadro-1000-TST/Quadro-1000-TST.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-1000-TST/Quadro-1000-TST-1.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-1000-TST/Quadro-1000-TST-2.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-1000-TST/Quadro-1000-TST-3.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-1000-TST/Quadro-1000-TST-4.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-1000-TST/Quadro-1000-TST-5.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Quadro 1000 TST</h3>
                        <ul>
                            <li><strong>Engranaje y cárter de aceite sobredimensionados</strong></li>
                            <li><strong>Depósito de agua integrado</strong></li>
                            <li><strong>Bastidor Roto-Mold</strong></li>
                            <li><strong>Tambor de manguera integrado</strong></li>
                            <li><strong>20 m de manguera de alta presión</strong></li>
                            <li><strong>Cable de conexión de 7,5 m con dispositivo arrollador</strong></li>
                            <li><strong>Arco de transporte ergonómico y desmontable, suministrable también opcionalmente en acero inoxidable.</strong></li>
                            <li><strong>Turbo-eliminador de suciedad con tubo de acero inoxidable.</strong></li>
                            <li><strong>Lanza de acero inoxidable con tobera de chorro plano</strong></li>
                            <li><strong>Sistema de colocación</strong></li>
                            <li><strong>Válvula de detergente</strong></li>
                            <li><strong>Parachoques de protección, suministrable también opcionalmente en acero inoxidable.</strong></li>
                            <li><strong>Freno de bloqueo</strong></li>
                            <li><strong>SKU:</strong> Quadro1000TST</li>
                            <li><strong>Categorías:</strong> Agua fria, Kränzle</li>
                            <li><strong>Etiquetas:</strong> agua fría, alta presión, hidrolavadora, trifásico</li><br>
                            <h5><strong>Usos industriales:</strong></h5>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('porcina') }}">Porcina</a></strong></li>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('ganadera') }}">Ganadera</a></strong></li>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('alimenticia') }}">Alimenticia</a></strong></li>
                            <li><button type="button" class="btn btn-outline-success col-12" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Ver datos técnicos</button></li>
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
                                    <div style="text-align: justify;">
                                        <p>
                                            La serie quadro de Kränzle combina todas las ventajas de la serie Profi y marca con el chasis de doble eje y las cuatro ruedas una nueva mejor marca en lo que respecta a estabilidad. Ofrece además la máxima concordancia funcional durante las operaciones que requieren puntos de intercambio frecuentes. También aquí se emplea exclusivamente engranaje y cárter de aceite sobredimensionados que prolongan considerablemente la vida útil en el intenso uso continuado. Y naturalmente el tambor de manguera integrado con manivela plegable y manguera de alta presión de hasta 20 m se incluyen en el equipamiento estándar en muchos modelos quadro, exactamente igual que el robusto parachoques de protección y el depósito de agua integrado. <br><br>
                                            La serie quadro. Tecnología líder sobre cuatro ruedas.
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
