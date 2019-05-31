<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Repore</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<article class="text-center">
		<h1>
			La {{$evento->tipoEvento->tipo}} de {{Auth::User()->name}}
			@empty($evento->cofestejado)
			@else
			y {{$evento->cofestejado}}
			@endempty
		</h1>
		<p class="text-center">{{Date::parse($evento->fecha)->format('l j \d\e F \d\e Y')}}</p>
	</article>
	<table class="table table-striped table-sm">
		<thead class="thead-dark">
			<tr>
				<th>Nombre</th>
				<th>Acompañantes</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($evento->invitados as $invitado)
				@empty($invitado->confirmacion)
					<tr>
						<td>{{$invitado->name." ".$invitado->appat." ".$invitado->apmat}}</td>
						<td>{{$invitado->acompanantes->count()}}</td>
						<td>Sin Confirmar</b></td>
					</tr>
				@endempty
			@endforeach
			@foreach($evento->invitados as $invitado)
				@empty($invitado->confirmacion)
				@else
				@if($invitado->confirmacion->asistencia->id == 1)
					<tr>
						<td>{{$invitado->name." ".$invitado->appat." ".$invitado->apmat}}</td>
						<td>{{$invitado->acompanantes->count()}}</td>
						<td>Asistirá</td>
					</tr>
				@endif
				@endempty
			@endforeach
			@foreach($evento->invitados as $invitado)
			@empty($invitado->confirmacion)
				@else
				@if($invitado->confirmacion->asistencia->id == 2)
					<tr>
						<td>{{$invitado->name." ".$invitado->appat." ".$invitado->apmat}}</td>
						<td>{{$invitado->acompanantes->count()}}</td>
						<td>Lo está pensando</td>
					</tr>
				@endif
				@endempty
			@endforeach
			@foreach($evento->invitados as $invitado)
			@empty($invitado->confirmacion)
				@else
				@if($invitado->confirmacion->asistencia->id == 3)
					<tr>
						<td>{{$invitado->name." ".$invitado->appat." ".$invitado->apmat}}</td>
						<td>{{$invitado->acompanantes->count()}}</td>
						<td><i class="far fa-frown red"></i> No Asistirá</td>
					</tr>
				@endif
				@endempty
			@endforeach
		</tbody>
	</table>
</body>
</html>