<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>@yield('titulo') | RVSP</title>
  </head>
  <body>
    @include('templetes.nav')
    @yield('welcome')
    @yield('portada')
      <section class="container {{ Request::is(['home','confirmar']) ? '' : 'pt-3 pb-3' }}">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
@include('flash::message')
@yield('contenido')
      </section>
    <footer>
      <section class="container">
        <section class="row">
          <article class="col-md-3 mb-1">
            <h5>Contáctanos</h5>
            <hr>
            <small>
              <ul class="list-group list-group-flush">
                <li><span>Correo:</span> hola@boda.com</li>
                <li><span>Telefono:</span> +52 (993) 366 8855</li>
                <li><span>Villahermosa, Tabasco, México</span></li>
              </ul>
            </small>
          </article>
          <article class="col-md-3 mb-1">
            <h5>Síguenos</h5>
            <hr>
            <a href="">
              <img src="{{asset('img/facebook.png')}}" alt="www.facebook.com">
            </a>
            <a href="">
              <img src="{{asset('img/instagram.png')}}" alt="www.instagram.com">
            </a>
          </article>
          <article class="col-md-3 mb-1">
            <h5>Suscríbete</h5>
            <hr>
            {!!Form::open()!!}
                <p><small>Recibe todas las noticias, promociones y publicaciones de nuestro blog directo a tu correo electrónico</small></p>
              {!! Form::label('email','Correo Electrónico')!!}
              {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'usuario@ejemplo.com','required'] )!!}
              {!! Form::submit('Registrame',['class'=>'btn btn-sm  btn-light float-right mt-1'])!!}
            {!!Form::close()!!}
          </article>
          <article class="col-md-3 mb-1">
            <h5>Cosas Importantes</h5>
            <hr>
            <small>
              <ul class="list-group list-group-flush">
                <li>Aviso de Privacidad</li>
                <li>Terminos y Condiciones</li>
                <li>Nuestro Equipo</li>
                <li>FAQ</li>
              </ul>
            </small>
          </article>
        </section>
      </section>
      <section class="footer">
        <div class="col-md-12">
          <small><p class="text-center">2019 bodarevsp.com</p></small>
        </div>
      </section>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>