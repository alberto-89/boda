@extends('templetes.main')
@section('titulo',$invitado->name.' '.$invitado->appat)
@section('contenido')
	<section class="row">
		<article class="col-md-6">
			<a href="{{route('eventos.show',$evento->id)}}" class="btn btn-info float-right mb-1"><i class="fas fa-tasks"></i> Regresar al Panel</a>
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th colspan="2">Invitado</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nombre:</td>
						<td><b>{{$invitado->titulo.' '.$invitado->name}}</b></td>
					</tr>
					<tr>
						<td>Apellidos:</td>
						<td>{{$invitado->appat.' '.$invitado->apmat}}</td>
					</tr>
					<tr>
						<td>Teléfono:</td>
						<td>{{$invitado->telefono}}</td>
					</tr>
					<tr>
						<td>Correo:</td>
						@empty($invitado->email)
							<td>-</td>
						@else
							<td>{{$invitado->email}}</td>
						@endempty
					</tr>
					<tr>
						<td>Codigo:</td>
						<td>{{$invitado->codigo}}
						</td>
					</tr>
					<tr>
						<td>Acompañantes:</td>
						<td>{{$invitado->acompanantes->count()}}</td>
					</tr>
				</tbody>
			</table>
		</article>
		<article class="col-md-6">
			@if(Session::get('totalInvitados') < Session::get('plan'))
				@if($evento->confirmado == 0)
					@include('invitados.modal')
				@endif
			@else
				<a href="" class="btn btn-outline-info float-right mb-1">¿Necesitas más invitados?</a>
			@endif

			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>Nombre del Acompañante</th>
						<th>Niño</th>
					</tr>
				</thead>
				<tbody>
					@foreach($invitado->acompanantes as $acompanante)
						<tr>
							<td>{{$acompanante->name}}</td>
							<td>
								@if($acompanante->nino == 1)
									<i class="fas fa-child green"></i> Niño
								@else
									<i class="fas fa-user red"></i> Adulto
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<hr>
			@empty($invitado->codigo)
			@else
				{!! QrCode::size(200)->generate(url('/codigo?codigo=').$invitado->codigo) !!}
			@endempty
		</article>
	</section>
@endsection