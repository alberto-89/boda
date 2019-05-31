@extends('templetes.main')
@section('titulo','Asistencia Confirmada')
@section('contenido')
	<section class="row">
		<article class="col-md-6 text-center">
			<h1 class="confirmado">¡Hola {{$invitado->name}}!</h1>
			@switch($confirmacion->asistencia->id)
				@case(1)
					<h2 class="confirmado">¡Tú asistencia ya fue confirmada y notificada a los anfitriones!</h2>
					@break
				@case(2)
					<h2 class="confirmado">Te recordamos que ya nos dijiste que aun estas considerando asistir, nosotros nos comunicaremos contigo pronto para saber tu respuesta.</h2>
					@break
				@case(3)
					<h2 class="confirmado">Es una pena que no puedas acompañarlos, pero sabemos que les deseas lo mejor</h2>
					@break
			@endswitch
			<hr>
			<p>¿Tienes un evento próximo? Mira nuestras <a href="{{route('precios')}}">promociones</a></p>
		</article>
		<article class="col-md-6">
			<p class="text-muted small">¿Deseas cambiar tu confirmación? Por favor comunícate con nosotros. Recuerda tener tu codigo a la mano. </p>
			<ul class="list-group list-group-flush">
				<li class="text-muted small list-group-item"><i class="fas fa-phone"></i> 9933462029</li>
				<li class="text-muted small list-group-item"><i class="fas fa-at"></i> cambiodeopinion@boda.com</li>
			</ul>
		</article>
	</section>
@endsection