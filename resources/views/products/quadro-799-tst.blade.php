@extends('layout')

@section('title', 'Quadro 799 TST')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}#portfolio">Equipos</a></li>
                <li>Quadro 799 TST</li>
            </ol>
            <h2>Quadro 799 TST</h2>
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
                                <img src="{{ asset('img/portfolio/Quadro-799-TST/Quadro-799-TST.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-799-TST/Quadro-799-TST-1.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-799-TST/Quadro-799-TST-2.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-799-TST/Quadro-799-TST-3.webp') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/portfolio/Quadro-799-TST/Quadro-799-TST-4.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Quadro 799 TST</h3>
                        <ul>
                            <li><strong>Engranaje y cárter de aceite sobredimensionados</strong></li>
                            <li><strong>Depósito de agua integrado</strong></li>
                            <li><strong>Bastidor Roto-Mold</strong></li>
                            <li><strong>Tambor de manguera integrado</strong></li>
                            <li><strong>20 m de manguera de alta presión</strong></li>
                            <li><strong>Cable de conexión de 7,5 m con dispositivo arrollador</strong></li>
                            <li><strong>Lanza con eliminador de suciedad con tubo de acero inoxidable</strong></li>
                            <li><strong>Lanza de acero inoxidable con tobera de chorro plano</strong></li>
                            <li><strong>Sistema de colocación</strong></li>
                            <li><strong>Válvula de detergente</strong></li>
                            <li><strong>Parachoques de protección</strong></li>
                            <li><strong>Freno de bloqueo</strong></li>
                            <li><strong>SKU:</strong> Quadro799TST</li>
                            <li><strong>Categorías:</strong> Agua fria, Kränzle</li>
                            <li><strong>Etiquetas:</strong> agua fría, alta presión, eléctrica, hidrolavadora</li><br>
                            <h5><strong>Usos industriales:</strong></h5>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('automotriz') }}">Automotriz</a></strong></li>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('limpiezag') }}">Limpieza General</a></strong></li>
                            <li><strong><i class="bx bx-check"></i> <a href="{{ route('construccion') }}">Construcción</a></strong></li>
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
                                                    <th scope="row">Presión de trabajo, ajustable</th>
                                                    <td>30-180 bar</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sobrepresión máxima permitida</th>
                                                    <td>200 bar</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Capacidad de agua max</th>
                                                    <td>13 l / min</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Consumo motor / trabajo</th>
                                                    <td>5,5 kW / 4,0 kW</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tamaño de boquilla (chorro plano)</th>
                                                    <td>25045</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tamaño de boquilla (Dirtkiller)</th>
                                                    <td>045</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Succión química</th>
                                                    <td>tan</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Temperatura agua suministrada</th>
                                                    <td>hasta 60 ° C</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Altura de succión</th>
                                                    <td>2,5 m</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sistema de parada total</th>
                                                    <td>tan</td>
                                                </tr>
                                                <th scope="row">Manguera de alta presión</th>
                                                <td>20 mb</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Suministro de energía eléctrica</th>
                                                    <td>400 V</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Peso en vacío</th>
                                                    <td>62 kg</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Velocidad de la bomba del motor</th>
                                                    <td>1400 rpm</td>
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
                                            <strong>Calidad “ Made in Germany ”:</strong><br><br>
                                            Las personas que se deciden por la marca Kränzle reciben siempre sofisticadas hidrolimpiadoras de alta presión con unas ventajas técnicas que convencen en toda la línea. Muchos de estos detalles técnicos son innovaciones que tienen su origen en el centro de desarrollo de Illertissen. El resultado: los usuarios se benefician de la máxima calidad “ Made in Germany ”, de la excepcional fuerza limpiadora y de un vida útil particularmente larga.
                                        </p>
                                        <p>
                                            <strong>CABEZAL DE LA BOMBA DE LATÓN DE ALTA RESISTENCIA</strong><br><br>
                                            El cabezal de la bomba lo fabrica Kränzle en Alemania con latón forjado de alta resistencia que garantiza una elevadísima longevidad.
                                        </p>
                                        <p>
                                            <strong>MOTORES DE BAJA VELOCIDAD</strong><br><br>
                                            Las máquinas – a excepción de los modelos HD 10/122 y K 1152 TS/TST – están equipados con motores eléctricos de 4 polos de marcha lenta, silenciosos y duraderos(1.400rpm). Lasrevoluciones más bajas reducen la corriente de arranque, el nivel de ruido y el desgaste.
                                        </p>
                                        <p>
                                            <strong>REGULACIÓN CONTINUA DE LA PRESIÓN Y DEL CAUDAL</strong><br><br>
                                            En todas las hidrolimpiadoras de alta presión se puede ajustarse la presión de trabajo y por tanto la cantidad de agua continuamente según la tarea de limpieza correspondiente.
                                        </p>
                                        <p>
                                            <strong>MANÓMETRO DE ACERO INOXIDABLE</strong><br><br>
                                            Todas las hidrolimpiadoras de alta presión están equipados con manómetros grandes y claramente dispuestos de acero inoxidable vaporizados con glicerina. Calidad Kränzle hasta el último detalle.
                                        </p>
                                        <p>
                                            <strong>PISTONES DE ACERO INOXIDABLE (ÉMBOLO) CON REVESTIMIENTO CERÁMICO.</strong><br><br>
                                            Todas las hidrolimpiadoras de alta presión están equipadas con pistones de acero y acero inoxidable. Las ventajas de los pistones de acero inoxidable (buena conductividad térmica) se combinan con las ventajas de un revestimiento cerámico (superficies altamente resistentes al desgaste), gracias a lo cual se eleva considerablemente la longevidad de las máquinas.
                                        </p>
                                        <p>
                                            <strong>RESISTENCIA A LA MARCHA EN SECO Y SISTEMA DE RETORNO DE FUGAS</strong><br><br>
                                            Todas las hidrolimpiadoras de alta presión están equipadas con un reten antigoteo y un anillo de grafito-teflón por cada pistón. Las excelentes propiedades deslizantes de teflón-grafito reducen las resistencias de fricción y por lo tanto las temperaturas de la máquina. De este modo, las máquinas pueden funcionar durante un tiempo prolongado sin agua y sin dañarse = resistencia a la marcha en seco. Un pequeño compartimento de agua situado entre los sistemas de hermeticidad del pistón evita que el aire aspirado penetre en la junta de la bomba. Gracias a ello, la longevidad de los pistones buzo y de la bomba aumenta considerablemente.
                                        </p>
                                        <p>
                                            <strong>RECIRCULACIÓN DEL AGUA (BYPASS)</strong><br><br>
                                            Todas las hidrolimpiadoras de alta presión al cerrarse la pistola de desconexión de seguridad, se activa la recirculación del agua sin presión. El agua recircula en el bypass con una presión residual de 10 bar. La bomba y el accionamiento se descargan de este modo, lo que provoca un aumento considerable de la vida útil y una reducción del consumo de energía. Los modelos con la designación adicional TS disponen de una función de parada total que incluso desconecta el motor totalmente en este caso.
                                        </p>
                                        <p>
                                            <strong>SIN CORROSIÓN Y ELEVADA LONGEVIDAD</strong><br><br>
                                            No es posible que se produzcan fallos de funcionamiento a causa de la corrosión. Los componentes de la bomba conductores de agua y los dispositivos de seguridad son de acero inoxidable o latón de alta resistencia.
                                        </p>
                                        <p>
                                            <strong>TAMBORES DE MANGUERA</strong><br><br>
                                            Los modelos con tambores de manguera ofrecen la máxima funcionalidad y minimizan los peligros de accidentes causados por mangueras de alta presión desenrolladas. Los tambores permiten el uso de mangueras de hasta 30 metros, dependiendo del modelo, ofreciendo una superficie de trabajo muy grande.
                                        </p>
                                        <p>
                                            <strong>SISTEMA DE COLOCACIÓN</strong><br><br>
                                            Los compartimentos para la pistola de desconexión de seguridad, lanza de turboeliminador de suciedad y lanza con tobera de chorro plano, así como el enrollador del cable eléctrico ofrecen condiciones de trabajo óptimas y un acceso rápido a los accesorios.
                                        </p>
                                        <p>
                                            <strong>CHASIS ROTO-MOLD</strong><br><br>
                                            Las máquinas de las series K 1152, K 2000, Profi, quadro y bully están equipadas con un chasis rotomoldeado. Este componente es extremadamente firme y resistente a la torsión, está fabricado en una sola pieza y maximiza la estabilidad de la hidrolimpiadora. El motor y la bomba están bien protegidos dentro de este bastidor, que los protege de golpes externos. Estos chasis Kränzle son virtualmente indestructibles.
                                        </p>
                                        <p>
                                            <strong>APROPIADO PARA TODO TERRENO; ESTABILIDAD</strong><br><br>
                                            El bastidor fabricado en una sola pieza (Chasis Roto-Mold), y por tanto muy estable y robusto con ruedas de grandes dimensiones, permite un fácil transporte en terrenos irregulares y proporciona una elevada estabilidad durante su utilización. De este modo, pueden superarse sin problemas pequeños obstáculos o escaleras.
                                        </p>
                                        <p>
                                            <strong>PROTECCIÓN</strong><br><br>
                                            Gracias al recipiente de agua integrado se evitan en gran medida daños en la bomba a causa de la falta de agua. Las intrusiones de burbujas de aire en la bomba, causadas por falta de agua, el principal motivo de avería en las bombas de alta presión, pueden excluirse prácticamente por completo. Con poca maniobra puede desactivarse el depósito de agua, por ejemplo, cuando ha de aspirarse agua de depósitos separados o de un estanque. Las siguientes series están equipadas con un depósito de agua: Profi, quadro, therm y las estacionarias de agua fría serie W.
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
