<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Envianos un mensaje y uno de nuestros asesores se pondrá en contacto con usted a la brevedad</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <a href="https://www.google.com.mx/maps/place/Hidrolavadoras+Industriales/@19.5903947,-99.2772379,17z/data=!3m1!4b1!4m5!3m4!1s0x85d202d4bbcee8a7:0xc3bc607534c17cf!8m2!3d19.5903897!4d-99.2750492" target="_blank">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Dirección:</h4>
                  <p>Guerrero 35, Col. Los Olivos, 54055 Cd López Mateos, Méx.</p>
                </a>
              </div>

              <div class="email">
                <a href="mailto:ventas@hammex.mx">
                  <i class="bi bi-envelope"></i>
                  <h4>Correo Electrónico:</h4>
                  <p>ventas@hammex.mx</p>
                </a>
              </div>

              <div class="phone">
                <a href="tel:+525555757492">
                  <i class="bi bi-phone"></i>
                  <h4>Número Teléfonico:</h4>
                  <p>(+52) 55-55-75-74-92</p>
                </a>
              </div>

              <div class="calendar">
                  <i class="bi bi-calendar"></i>
                  <h4>Horario de oficina:</h4>
                  <p>Lunes a Viernes: 07:00 - 17:00</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.86240351645!2d-99.27723788561549!3d19.59039474069351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d202d4bbcee8a7%3A0xc3bc607534c17cf!2sHidrolavadoras%20Industriales!5e0!3m2!1ses!2smx!4v1653971189837!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('contact') }}" method="POST" role="form" class="php-email-form">
                @csrf
              <div class="row">
                  @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {!! session()->get('message') !!}
                    </div>
                  @endif
                <div class="form-group col-md-6">
                  <label for="name">Nombre:</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                  {!! $errors->first('name', '<br><div class="alert alert-danger" role="alert">:message</div>') !!}
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Correo Electrónico:</label>
                  <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                  {!! $errors->first('email', '<br><div class="alert alert-danger" role="alert">:message</div>') !!}
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="phone">Número Teléfonico:</label>
                  <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" required>
                  {!! $errors->first('phone', '<br><div class="alert alert-danger" role="alert">:message</div>') !!}
                </div>
                <div class="form-group col-md-6">
                  <label for="empresa">Empresa:</label>
                  <input type="text" class="form-control" name="empresa" id="empresa" value="{{ old('empresa') }}" required>
                  {!! $errors->first('empresa', '<br><div class="alert alert-danger" role="alert">:message</div>') !!}
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="industria">Industria a la que pertenece:</label>
                  <input type="text" class="form-control" name="industria" id="industria" value="{{ old('industria') }}" required>
                  {!! $errors->first('industria', '<br><div class="alert alert-danger" role="alert">:message</div>') !!}
                </div>
                <div class="form-group col-md-6">
                  <label for="subject">Asunto:</label>
                  <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" required>
                  {!! $errors->first('subject', '<br><div class="alert alert-danger" role="alert">:message</div>') !!}
                </div>
              </div>

              <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea class="form-control" name="message" id="message" rows="10" required>{{ old('message') }}</textarea>
                {!! $errors->first('message', '<br><div class="alert alert-danger" role="alert">:message</div>') !!}
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
