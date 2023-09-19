@extends('layout')

@section('title', 'Profi 175 TST')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
                <li>Profi 175 TST</li>
            </ol>
            <h2>Profi 175 TST</h2>
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
                                <img src="{{ asset('img/portfolio/Profi-175-TST/Profi-175-TST.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Profi-175-TST/Profi-175-TST-1.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Profi-175-TST/Profi-175-TST-2.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Profi-175-TST/Profi-175-TST-3.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Profi 175 TST</h3>
                        <ul>
                            <li><strong>chasis integrado</strong></li>
                            <li><strong>Cable de conexión, 5 m.</strong></li>
                            <li><strong>rebobinado de cable</strong></li>
                            <li><strong>lanza Dirtkiller</strong></li>
                            <li><strong>Manguera de alta presión de tela de acero, 15 m</strong></li>
                            <li><strong>carrete de manguera integrado</strong></li>
                            <li><strong>total facilidad-Stop</strong></li>
                            <li><strong>Pistola de cierre con mango</strong></li>
                            <li><strong>Lanza de pulverización con tubo de acero inoxidable.</strong></li>
                            <li><strong>Aplicación aditiva posible a plena presión de trabajo</strong></li>
                            <li><strong>regulación de presión continua</strong></li>
                            <li><strong>cabeza de la bomba de latón</strong></li>
                            <li><strong>émbolo de bomba recubierto de cerámica</strong></li>
                            <li><strong>Sistema de retorno de fugas</strong></li>
                            <li><strong>Carcaj para pistola de corte</strong></li>
                            <li><strong>Carcaj para asesino de suciedad y lanza de lavado</strong></li>
                            <li><strong>Escaleras móviles</strong></li>
                            <li><strong>Bomba industrial para uso continuo.</strong></li>
                            <li><strong>SKU:</strong> Profi175TST</li>
                            <li><strong>Categorías:</strong> Agua fria, Kränzle</li>
                            <li><strong>Etiquetas:</strong> agua fría, alta presión, doméstico, hidrolavadora, móvil</li><br>
                            <h5><strong>Usos industriales:</strong></h5>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('agricultura') }}">Agricultura</a></strong></li>
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
                                                    <th scope="row">Presión de trabajo, infinitamente variable.</th>
                                                    <td>30-150 bar / 3-15 MPa</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Boquilla de chorro plano</th>
                                                    <td>20042</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tamaño de la boquilla asesino de suciedad</th>
                                                    <td>042</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">La velocidad del motor</th>
                                                    <td>1400 rpm</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sobrepresión permitida</th>
                                                    <td>175 bar / 17.5 MPa</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">la energía hidráulica</th>
                                                    <td>12 l / min (720 l / h)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">suministro de agua caliente</th>
                                                    <td>máx. 60 grados centígrados</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">succión</th>
                                                    <td>2,5 m</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valor de conexión eléctrica </th>
                                                    <td>400V, 7.2A, 50Hz</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Valor conectado: grabación</th>
                                                    <td>3.8 kW</td>
                                                </tr>
                                                <th scope="row">Valor conectado: entrega</th>
                                                <td>3,0 kW</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">peso</th>
                                                    <td>45 kg</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dimensiones con mango en mm
                                                    </th>
                                                    <td>355 x 375 x 980</td>
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
                                    <div style="text-align: justify;">
                                        <p>
                                            La nueva familia profesional representa el desarrollo consecuente de la probada serie Kränzle T: los nuevos profesionales impresionan con su diseño moderno y orientado al futuro y su tecnología mejorada de rendimiento. Por ejemplo, se usa un engranaje extremadamente sobredimensionado, lo que aumenta significativamente la vida útil del equipo. El diseño abierto también permite un acceso fácil de mantener a todas las partes importantes.
                                        </p>
                                        <p>
                                            Las ventajas del exitoso principio de orden Kränzle son el carrete de manguera instalado permanentemente, los carcaj para la pistola de alta presión, el asesino de suciedad y la lanza de lavado y el rebobinado del cable eléctrico. Se puede acceder fácilmente a todo en el dispositivo y se puede operar fácil y fácilmente. El tambor de la manguera también fue dimensionado mucho más grande que la serie T, para facilitar el devanado de la manguera.
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
