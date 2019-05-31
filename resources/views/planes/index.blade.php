@extends('templetes.main')
@section('titulo','Administrar Planes')
@section('contenido')
<section class="row pt-3">
	<article class="col-md-9">
		<table class="table text-center">
			<thead class="thead-dark">
				<tr>
					<th>Plan</th>
					<th>Invitados</th>
					<th>Descripción</th>
					<th>Precio</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($planes as $plan)
					<tr>
						<td>{{$plan->nombre}}</td>
						<td>{{$plan->invitados}}</td>
						<td>{{$plan->descripcion}}</td>
						<td>{{$plan->precio}}</td>
						<td>
							<a href="{{route('planes.edit',$plan->id)}}" class="btn btn-outline-info">
								<i class="fas fa-edit"></i>
							</a>
						</td>
						<td>
							<a href="{{route('planes.destroy',$plan->id)}}" class="btn btn-outline-danger">
								<i class="fas fa-trash-alt"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</article>
	<article class="col-md-3">
		{!! Form::open(['route'=>'planes.store','method'=>'post']) !!}
			<div class="form-group">
				{!! Form::label('nombre','Nombre:') !!}
				{!! Form::text('nombre',null,['class'=>'form-control','autofocus','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('invitados','Invitados:') !!}
				{!! Form::text('invitados',null,['class'=>'form-control','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('precio','Precio:') !!}
				{!! Form::text('precio',null,['class'=>'form-control','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('descripcion','Descripción:') !!}
				{!! Form::textarea('descripcion',null,['class'=>'form-control','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Agregar',['class'=>'btn btn-success']) !!}
			</div>
		{!! Form::close() !!}
	</article>
</section>
@endsection