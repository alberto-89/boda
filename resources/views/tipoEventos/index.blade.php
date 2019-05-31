@extends('templetes.main')
@section('titulo','Administrar Tipode Eventos')
@section('contenido')
<section class="row pt-3">
	<article class="col-md-8">
		<table class="table text-center">
			<thead class="thead-dark">
				<tr>
					<th>Tipo</th>
					<th>Descripción</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tipos as $tipo)
					<tr>
						<td>{{$tipo->tipo}}</td>
						<td>{{$tipo->descripcion}}</td>
						<td>
							<a href="{{route('tipoEventos.edit',$tipo->id)}}" class="btn btn-outline-info">
								<i class="fas fa-edit"></i>
							</a>
						</td>
						<td>
							<a href="{{route('tipoEventos.destroy',$tipo->id)}}" class="btn btn-outline-danger">
								<i class="fas fa-trash-alt"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</article>
	<article class="col-md-4">
		{!! Form::open(['route'=>'tipoEventos.store','method'=>'post']) !!}
			<div class="form-group">
				{!! Form::label('tipo','Tipo de Evento:') !!}
				{!! Form::text('tipo',null,['class'=>'form-control','autofocus','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('descripcion','Descripción de Evento:') !!}
				{!! Form::textarea('descripcion',null,['class'=>'form-control','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Agregar',['class'=>'btn btn-success']) !!}
			</div>
		{!! Form::close() !!}
	</article>
</section>
@endsection