@extends('templetes.main')
@section('titulo','Inicio')
@section('welcome')
<header class="welcome d-flex justify-content-center align-items-center">
	<section class="container">
		<div class="row">
			<article class="col-md-6">
				<h2 class="titulo text-center">
					Evita gastos de más
				</h2>
			</article>
			<article class="col-md-6">
				<h2 style="color: ">Queremos ayudarte a organizar mejor tu evento</h2>
				<a class="btn btn-success" href="{{route('register')}}">
					<i class="fas fa-glass-cheers"></i> Crear Evento Gratis
				</a>
			</article>
	</section>
		</div>
</header>
@endsection
@section('contenido')
  <hr>
  <section class="row">
  	<article class="col-md-6">
  		<h3>Beneficios que te ofrece una oportuna y bien organizada confirmación de invitados</h3>
  		<ul class="text-justify">
  			<li>Saber cuántos son los invitados que asistirán, así entonces calcular sin merma el número de platillos, regalos, recuerdos, etc.</li>
		  	<li>Poder invitar a personas que tenías contempladas en tu lista B</li>
		  	<li>Asignar lugares y montar únicamente el mobiliario necesario</li>
		  	<li>Recordar a tus invitados el código de vestimenta o datos importantes que no deben olvidar</li>
		  	<li>Aclarar dudas de los invitados sobre el evento</li>
		</ul>
		<a class="btn btn-success" href="{{route('register')}}">
			<i class="fas fa-glass-cheers"></i> Crear Evento Gratis
		</a>
		<hr>
		<h3>¿Qué es lo hacemos?</h3>
		<p class="text-justify">Nuestro principal objetivo es que disfrutes cada parte de la organización de tu evento, y sabemos de experiencia propia lo estresante que puede ser el tema de los invitados.</p>
		<p class="text-justify">Es por ello que decidimos crear una plataforma que ayude a que puedas optimizar tus recursos destinados, invirtiendo únicamente en los asistentes confirmados a tu evento.</p>
		<p class="text-justify">Tu creas una lista de invitados en línea, la cual podrás modificar hasta que tengas una lista definitiva, y nosotros nos encargamos de hacer los contactos correspondientes.</p>
		<p class="text-justify">Además, tus invitados tendrán la posibilidad de hacer el registro por ellos mismos en el momento que lo deseen a través de un código único para cada uno de ellos.</p>
		<a class="btn btn-success" href="{{route('register')}}">
			<i class="fas fa-glass-cheers"></i> Crear Evento Gratis
		</a>
  	</article>
  	<article class="col-md-6">
  		<img src="{{asset('img/banquete.jpg')}}" alt="banquete" class="img-fluid">
  	</article>

  </section>
@endsection