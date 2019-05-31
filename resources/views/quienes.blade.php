@extends('templetes.main')
@section('titulo','¿Quiénes somos?')
@section('contenido')
  <section class="row">
  	<article class="col-md-12">
  		<h3>¿Quiénes Somos?</h3>
  		<hr>
  		<img src="{{asset('img/nosotros.jpg')}}" alt="nosotros" class="float-sm-none float-md-right shadow ml-3 p-1 bg-white rounded">
  		<p class="text-justify">Somos una pareja de emprendedores que por experiencia propia sabemos lo complicado que puede resultar la organización de una boda, o de cualquier evento social que involucre más de 50 de personas.</p>
  		<p class="text-justify">Durante la organización de nuestra propia boda vimos la necesidad de optimar los recursos con los que contábamos en ese entonces para hacer lo mejor posible y disfrutar al máximo nuestra celebración.</p>
  		<p class="text-justify">Los invitados fue el punto que más stress nos generó, desde las varias listas de invitados, y la lista definitiva, a la cual necesitábamos asegurar de alguna manera que los platillos, souvenirs, y demás artículos limitados fueran los necesarios para que todos disfrutaran al igual que nosotros.</p>
  		<p class="text-justify">Es por ello que decidimos implementar un sistema electrónico de confirmación de asistencias, con el cual los invitados podrían confirmar su participación en nuestro evento sin tener que interactuar directamente con nosotros, evitando un “Si falso”, “lo checo y les aviso” …</p>
  		<p class="text-justify">Y obteniendo de forma eficiente su respuesta, y nosotros contar con la seguridad de que nuestros recursos como platillos y bebidas fueran los suficientes para los invitados que con seguridad nos acompañarían.</p>
		<hr>
		<a class="btn btn-success" href="{{route('register')}}">
			<i class="fas fa-glass-cheers"></i> Crear Evento Gratis
		</a>
  	</article>
  </section>
@endsection