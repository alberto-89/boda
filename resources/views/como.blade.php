@extends('templetes.main')
@section('titulo','¿Cómo Funciona?')
@section('contenido')
  <section class="row">
    <header class="col-md-12">
      <h3>¿Cómo Funciona?</h3>
      <hr>
    </header>
    <article class="col-md-3">
     <h2 class="text-center">Registra</h2>
     <hr>
     <p class="text-justify">
        <p class="text-center">
          <i class="fas fa-user faces rosa"></i>
        </p>
        Rellena un simple formulario para ingresar al sistema
      </p>
    </article>
    <article class="col-md-3">
      <h2 class="text-center">Crea</h2>
      <hr>
      <p class="text-center">
        <i class="fas fa-plus-circle faces rosa"></i>
      </p>
      <p class="text-justify">
        Crea tu evento con los invitados que necesitas
      </p>
    </article>
    <article class="col-md-3">
      <h2 class="text-center">Confirma</h2>
      <hr>
      <p class="text-center">
        <i class="fas fa-check-double faces rosa"></i>
      </p>
      <p class="text-justify">
        Nosotros hacemos las llamadas por ti
      </p>
    </article>
    <article class="col-md-3">
      <h2 class="text-center">¿Y tus invitados?</h2>
      <hr>
      <p class="text-center">
        <i class="fas fa-users faces green"></i>
      </p>
        <p class="text-justify">
        Ellos pueden hacer su confirmación en linea en el momento que lo deseen
      </p>
    </article>
  </section>
@endsection