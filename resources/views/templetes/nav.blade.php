<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" class="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
      <div class="navbar-nav">
        @guest
          <a class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link {{ Request::is('quienes-somos') ? 'active' : '' }}" href="{{route('quienes')}}">¿Quiénes Somos?</a>
          <a class="nav-item nav-link {{ Request::is('como-funciona') ? 'active' : '' }}" href="{{url('como-funciona')}}">¿Cómo Funciona?</a>
          <a class="nav-item nav-link {{ Request::is('precios') ? 'active' : '' }}" href="{{url('/precios')}}">Precios</a>
          <a class="nav-item nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{route('login')}}">Iniciar Sesión</a>
          <a class="nav-item nav-link" href="{{route('register')}}"><span class="badge badge-secondary p-2"><i class="fas fa-glass-cheers"></i> Crear Evento Gratis</span></a>
        @else
          <a class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{route('home')}}">Panel de Control</a>
          <a class="nav-item nav-link" href="https://www.kichink.com/stores/kutsu" target="_blank">Comprar Códigos</a>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Salir') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </div>
    </div>
  </div>
</nav>