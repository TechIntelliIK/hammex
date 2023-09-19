@extends('layout')

@section('title', 'Hidrolavadoras Hammex')

@section('content')

  <div id="slider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <img src="{{ asset('img/slider/1.webp') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="{{ asset('img/slider/2.webp') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="{{ asset('img/slider/3.webp') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="{{ asset('img/slider/4.webp') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="{{ asset('img/slider/5.webp') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

  <main id="main">

    <!-- ======= Provedroes Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row justify-content-center" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/providers/falch-logo_wow.webp') }}" class="img-fluid" alt="Falch">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/providers/kranzle-logo.webp') }}" class="img-fluid" alt="Kranzle">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/providers/tst-logo.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/providers/mach-logo.webp') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Quiénes Somos</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p style="text-align: justify;">
              Somos una empresa 100% Mexicana, con más de 30 años de experiencia en la industria, especializados en
              sistemas de limpieza con agua a alta y ultra alta presión. <br><br>

              Representamos en México empresas de la más alta calidad a nivel mundial. Contamos con un departamento de
              ingeniería especializada, para diseñar el sistema adecuado para cada necesidad en la industria en general. <br><br>

              Nuestro departamento técnico, cuenta con certificación a nivel mundial para la instalación, reparación y
              mantenimiento de todos los equipos que comercializamos, brindando también capacitación sobre su operación
              y mantenimiento. <br><br>

              Gracias a nuestras alianzas con las empresas mas importantes de la industria a nivel mundial, ofrecemos
              equipos especializados de hidrolimpieza e hidrodemolición que son el resultado de investigación y
              desarrollo de alta tecnología de agua a alta presión.
            </p>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p style="text-align: justify;">
              ¿Cuál equipo es el adecuado para usted?
              El campo de aplicación de las hidrolavadoras es muy amplio. Se necesita información precisa para
              determinar el equipo mas adecuado a sus necesidades. Nosotros podemos asesorarle para elegir el mas
              adecuado, contestando unas simples preguntas:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> ¿Qué va a limpiar?</li>
              <li><i class="ri-check-double-line"></i> ¿Frecuencia de uso?</li>
              <li><i class="ri-check-double-line"></i> ¿Tipo de superficie?</li>
              <li><i class="ri-check-double-line"></i> ¿Requerimientos técnicos?</li>
              <li><i class="ri-check-double-line"></i> Definimos el equipo correcto</li>
            </ul>
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Servicios</h2>
          <p>En nuestros servicios ofrecemos y contamos con lo siguiente:</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-home"></i></div>
              <h4><a href="">Asesoría</a></h4>
              <p>Reciba una consulta de nuestros especialistas. Brindamos orientación especializada para seleccionar o
                diseñar, la solución mas rentable y adecuada a sus necesidades.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-dollar-circle"></i></div>
              <h4><a href="">Ventas</a></h4>
              <p>Ofrecemos únicamente soluciones de la mas alta calidad. Nuestras hidrolavadoras y sistemas de limpieza,
                son únicamente para uso profesional y garantizan llegar a donde otros equipos no pueden.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-like"></i></div>
              <h4><a href="">Capacitación</a></h4>
              <p>Brindamos capacitación al entregar nuestros productos con la finalidad de garantizar su correcto
                funcionamiento, mantenimiento optimo y total seguridad de operación. Ofrecemos renovación y cursos
                especializados sobre el uso de alta presión, seguridad y mantenimiento.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-cog"></i></div>
              <h4><a href="">Soporte Técnico</a></h4>
              <p>Instalación y asesoría constante. Nuestro personal técnico puede apoyarlo a realizar cualquier
                instalación relacionada a nuestros sistemas o solucionar cualquier duda que pudiera presentarse.</p>
            </div>
          </div>

        </div>
        <div class="row pt-3">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4><a href="">Mantenimiento y reparación</a></h4>
              <p>Somos profesionales certificados a nivel internacional para brindar mantenimiento a cualquier sistema
                que comercializamos. Ofrecemos pólizas de mantenimiento para garantizar un funcionamiento optimo y
                seguro los 365 días del año.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-check-double"></i></div>
              <h4><a href="">Reparación</a></h4>
              <p>Ponemos a su disposición un stock de refacciones y accesorios para brindar respuesta en un lapso menor
                a 24 horas. Únicamente con piezas originales que garantizan la confiabilidad y calidad del servicio.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
          <h2 class="text-white">Nuestros Clientes</h2>
        </div>
        <div class="row justify-content-center" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-CICSA.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-continental.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-CPF.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-ES.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-FCA.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-GM.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-HYUNDAI.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-IPSSE.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-LA-CENTRAL.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-LINAMAR.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-MACIMEX.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-NISSAN.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/clientes-op.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-PEMEX.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-RHI.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-TNG.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-TREKANT.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-TRESGUERRAS.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-TRW.webp') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/clients/CLIENTES-VW.webp') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cta Section -->

    @include('partials.portfolio')

  </main><!-- End #main -->

@endsection
