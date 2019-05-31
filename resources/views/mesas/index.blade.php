@extends('templetes.main')
@section('titulo','Administrar Tipos de Mesas')
@section('contenido')
<section class="row pt-3">
	<article class="col-md-9">
		<table class="table text-center">
			<thead class="thead-dark">
				<tr>
					<th>Tipo de Mesa</th>
					<th>Capacidad</th>
					<th >Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tipoMesas as $tipoMesa)
					<tr>
						<td>{{$tipoMesa->tipo}}</td>
						<td>{{$tipoMesa->capacidad}}</td>
						<td>
							<a href="{{route('tipoMesas.destroy',$tipoMesa->id)}}" class="btn btn-outline-danger">
								<i class="fas fa-trash-alt"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</article>
	<article class="col-md-3">
		{!! Form::open(['route'=>'tipoMesas.store','method'=>'post']) !!}
			<div class="form-group">
				{!! Form::label('codigo','Codigo:') !!}
				{!! Form::text('codigo',$nuevoCodigo,['class'=>'form-control','readonly']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('plan_id','Plan:') !!}
				{!! Form::select('plan_id', $planes, null, ['placeholder' => 'Selecciona un PLan...','class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Agregar',['class'=>'btn btn-success']) !!}
			</div>
		{!! Form::close() !!}
	</article>
</section>
@endsection