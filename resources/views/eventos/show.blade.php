@extends('templetes.main')
@section('titulo',$evento->tipoEvento->tipo.' de '.Auth::User()->name)
@section('contenido')
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
	<section class="row">
		<article class="col-md-4">
			<i class="far fa-smile faces float-left mr-2 green"></i>
			<div>
				<h2>{{$asistira}}</h2>
					<h2>Aceptaron</h2>
			</div>
		</article>
		<article class="col-md-4">
			<i class="far fa-meh faces float-left mr-2 yellow"></i>
			<div>
				<h2>{{$duda}}</h2>
				<h2>Estan indecisos</h2>
			</div>
		</article>
		<article class="col-md-4">
			<i class="far fa-frown faces float-left mr-2 red"></i>
			<div>
				<h2>{{$noAsistira}}</h2>
				<h2>No Asistiran</h2>
			</div>
		</article>
	</section>
	<hr>
	<article class="row">
		<div class="col-md-5">
			<h3>Lista de Invitados</h3>
		</div>
		<div class="col-md-7 text-right">
			@if($evento->confirmado == 0)
				<a href="{{route('eventos.definitiveGuest',$evento->id)}}" class="btn btn-success"><i class="far fa-check-circle"></i> Lista Definitiva</a>
				@if($totalInvitados < Session::get('plan'))
					@can('invitados.create')
						<a href="{{route('invitados.create')}}" class="btn btn-outline-dark"><i class="fas fa-user-plus"></i> Agregar Invitado</a>
					@endcan
				@else
					<a href="" class="btn btn-outline-info">¿Necesitas más invitados?</a>
				@endif
			@else
				<a href="{{route('pdf.reporte')}}" class="btn btn-outline-dark"><i class="fas fa-download"></i> Descargar Lista</a>
				<a href="{{route('pdf.qrGenerateAll')}}" class="btn btn-outline-success"><i class="fas fa-ticket-alt"></i> Descargar Tickets</a>
			@endif
			<button type="button" class="btn btn-primary">
			  Invitados <span class="badge badge-light">{{$totalInvitados}}</span>
			</button>
		</div>
	</article>
	<hr>
	
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>Fecha de Confirmación</th>
				@if($evento->confirmado === 0)
					<th><i class="fas fa-trash-alt"></i></th>
				@endif
				<th>Nombre</th>
				<th>Acompañantes</th>
				<th>Correo Electronico</th>
				<th>Telefono</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($evento->invitados as $invitado)
				<tr>
					<td>
						@empty($invitado->confirmacion)
							Sin Confirmar
						@else
							{{Date::parse($invitado->confirmacion->created_at)->format('l j \d\e F \d\e Y')}}
						@endempty
					</td>
					@if($evento->confirmado === 0)
						<td>
							<a href="{{route('invitados.destroy',$invitado->id)}}" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
						</td>
					@endif
					<td>
						<a href="{{route('invitados.show',$invitado->id)}}">
							{{$invitado->name.' '.$invitado->appat.' '.$invitado->apmat}}
						</a>
					</td>
					<td class="text-center">{{$invitado->acompanantes->count()}}</td>
					<td>{{$invitado->email}}</td>
					<td>{{$invitado->telefono}}</td>
					<td class="text-center">@empty($invitado->confirmacion)
							<b><i class="fas fa-question"></i></b>
						@else
							@switch($invitado->confirmacion->asistencia->id)
								@case(1)
									<i class="far fa-smile green"></i>
								@break
								@case(2)
									<i class="far fa-meh yellow"></i>
								@break
								@case(3)
									<i class="far fa-frown red"></i>
								@break
							@endswitch
							{{$invitado->confirmacion->asistencia->tipo}}
						@endempty</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection