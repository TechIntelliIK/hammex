@extends('layout')

@section('title', 'HD 7/122 TS')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
                <li>HD 7/122 TS</li>
            </ol>
            <h2>HD 7/122 TS</h2>
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
                                <img src="{{ asset('img/portfolio/HD-7-122-TS/HD-7-122-TS.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/HD-7-122-TS/HD-7-122-TS-1.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/HD-7-122-TS/HD-7-122-TS-2.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>HD 7/122 TS</h3>
                        <ul>
                            <li><strong>Asa de transporte ergonómica:</strong> Diseño compacto que ocupa poco espacio.
                            </li>
                            <li><strong>Sistema de parada total:</strong> Para aliviar la bomba de alta presión.</li>
                            <li><strong>Regulación de la presión de trabajo:</strong> Presión de trabajo regulable de
                                forma gradual.</li>
                            <li><strong>Motor eléctrico DE 4 polos (1400 rpm): </strong> con depósito</li>
                            <li><strong>SKU:</strong> HD 7/122 TS</li>
                            <li><strong>Categorías:</strong> Agua fria, Kränzle</li>
                            <li><strong>Etiquetas:</strong> agua fría, alta presión, hidrolavadora</li><br>
                            <h5><strong>Usos industriales:</strong></h5>
                            <li><strong><i class="bx bx-check"></i> Limpieza General: Usos domésticos y semi
                                    industriales</strong></li>
                            <li><strong><i class="bx bx-check"></i> Otros: limpieza de espacios públicos</strong></li>
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
                                                    <th scope="row">Presión de trabajo regulable bares / MPa</th>
                                                    <td>30-120 / 3-12</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sobrepresión admisible máx. bares / MPa</th>
                                                    <td>135 / 13.5</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Potencia eléctrica conectada V / ~ / Hz / A</th>
                                                    <td>230 / 1 / 50 / 7.5</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Revoluciones del motor Rpm</th>
                                                    <td>1400</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Caudal de Agua l/min – l/h</th>
                                                    <td>7 / 420</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Potencia absorbida / suministrada kW / kW</th>
                                                    <td>1.6 / 1.0</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cable de conexión a la red m</th>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dimensiones (L x A x H) mm</th>
                                                    <td>440 / 200 / 330</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Peso Kg</th>
                                                    <td>22</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Aspiración de detergente</th>
                                                    <td>–</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tambor de Manguera</th>
                                                    <td>–</td>
                                                </tr <tr>
                                                <th scope="row">Manguera de alta presión con armadura de acero m</th>
                                                <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pistola de desconexión de seguridad Modelo</th>
                                                    <td>M2000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Lanza con eliminador de suciedad Tamaño de tobera
                                                    </th>
                                                    <td>028</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Lanza de acero inoxidable con tobera de chorro plano
                                                        Tamaño de tobera</th>
                                                    <td>M20028</td>
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
                                            <strong>Cabezal de Bomba de Latón Especial</strong><br><br>
                                            El cabezal de bomba fabricado con latón de alta resistencia forjado en el
                                            núcleo de nuestras sofisticadas hidrolimpiadoras de alta presión. Un
                                            manómetro de acero inoxidable grande y claramente visible (excepto en la
                                            serie K1050) completan el equipo. Mediante la resistencia a la marcha en
                                            seco y el sistema de retorno de fugas se aumenta considerablemente la vida
                                            útil de las máquinas.
                                        </p>
                                        <p>
                                            <strong>Pistones de Acero Inoxidable con Revestimiento Cerámico</strong><br><br>
                                            Todas las hidrolimpiadoras de alta presión de Kränzle están dotadas de
                                            émbolos buzo de acero inoxidable con revestimiento de cerámica que aumentan
                                            considerablemente la durabilidad de las máquinas. La buena conductividad
                                            térmica de un émbolo buzo de acero inoxidable se combina con las propiedades
                                            positivas de un revestimiento de cerámica (superficie extremadamente
                                            resistente al desgaste).
                                        </p>
                                        <p>
                                            <strong>Motor de Alto Rendimiento con una Larga Vida Útil</strong><br><br>
                                            Motor de Alto Rendimiento con una Larga Vida Útil
                                            Los motores de grandes dimensiones, duraderos y dotados de la calidad
                                            habitual de Kränzle garantizan una vida útil especialmente larga y un
                                            rendimiento máximo.
                                            Las hidrolimpiadoras de alta presión incorporan motores eléctricos de 4
                                            polos de baja velocidad y funcionan con un bajo régimen de revoluciones
                                            (1.700 rpm), lo que reduce la corriente de arranque, la generación de ruidos
                                            y el desgaste.
                                        </p>
                                        <p>
                                            <strong>Recirculación del agua (bypass)</strong><br><br>
                                            Recirculación del agua (bypass)
                                            Todas las hidrolimpiadoras de alta presión al cerrarse la pistola de
                                            desconexión de seguridad,activan la recirculación del agua sin presión. El
                                            agua recircula en el bypass con una presión residual de 10 bar. Los modelos
                                            con sistema de parada total que incluso desconecta el motor totalmente en
                                            este caso. La bomba de alta presión y el accionamiento se descargan de este
                                            modo, lo que provoca un aumento considerable de la vida útil y una reducción
                                            del consumo de energía.
                                        </p>
                                        <p>
                                            <strong>Resistencia a la marcha en seco y sistema de retorno de fugas</strong><br><br>
                                            Resistencia a la marcha en seco y sistema de retorno de fugas
                                            Todas las hidrolimpiadoras de alta presión están equipadas con un reten
                                            antigoteo y un anillo de grafito-teflón. Las excelentes propiedades
                                            deslizantes de teflón-grafito reducen las resistencias de fricción y por lo
                                            tanto las temperaturas de la máquina. De este modo, las máquinas pueden
                                            funcionar durante un tiempo prolongado sin agua y sin dañarse. Un pequeño
                                            compartimento de agua situado entre los sistemas de hermeticidad del pistón
                                            evita que el aire aspirado penetre en la junta de la bomba.
                                        </p>
                                        <p>
                                            <strong>Regulación continua de la presión de trabajo</strong><br><br>
                                            En todas las hidrolimpiadoras de alta presión se puede ajustarse la presión
                                            de trabajo y por tanto la cantidad de agua continuamente según la tarea de
                                            limpieza correspondiente.
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
