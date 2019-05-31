@extends('templetes.main')
@section('titulo','Confirmar Asistencia')
@section('contenido')
	<section class="row">
		<article class="col-md-6">
			{!! Form::open(['route'=>'confirmaciones.store','method'=>'post']) !!}
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th colspan="2" class="text-center">Invitado</th>
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
						<td>{{$invitado->email}}</td>
					</tr>
					<tr>
						<td>Codigo:</td>
						<td>{{$invitado->codigo}}</td>
					</tr>
					<tr>
						<td>
							@if($invitado->acompanantes->count() == 1)
								Acompañante:
							@else
								Acompañantes:
							@endif
						</td>
						<td>{{$invitado->acompanantes->count()}}</td>
					</tr>
				</tbody>
			</table>
		</article>
		<article class="col-md-6">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th colspan="2" class="text-center">
							@if($invitado->acompanantes->count() == 1)
								Acompañante
							@else
								Acompañantes
							@endif
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-center">
						<td colspan="2"><small><b>Desliza para confirmar</b></small></td>
					</tr>
					@foreach($invitado->acompanantes as $acompanante)
						<tr>
							<td>
								<div class="custom-control custom-switch">
								  <input type="checkbox" class="custom-control-input" id="customSwitch{{$acompanante->id}}" name="invitados[]" value="{{$acompanante->id}}">
								  <label class="custom-control-label" for="customSwitch{{$acompanante->id}}">{{$acompanante->name.' '.$acompanante->appat.' '.$acompanante->apmat}}</label>
								</div>
							</td>
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
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
			  <label class="btn btn-outline-success active">
			    <input type="radio" name="asistencia" id="option1" autocomplete="off" value="1" checked> Asistiré
			  </label>
			  <label class="btn btn-outline-dark">
			    <input type="radio" name="asistencia" id="option2" autocomplete="off" value="2"> Lo estoy pensando
			  </label>
			  <label class="btn btn-outline-danger">
			    <input type="radio" name="asistencia" id="option3" autocomplete="off" value="3"> No asistiré
			  </label>
			</div>
			{!! Form::submit('Confirmar Asistencia',['class'=>'btn btn-info float-right']) !!}
			{!! Form::close() !!}
		</article>
	</section>
@endsection