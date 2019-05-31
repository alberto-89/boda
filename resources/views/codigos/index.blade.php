@extends('templetes.main')
@section('titulo','Administrar Codigos')
@section('contenido')
<section class="row pt-3">
	<article class="col-md-9">
		<table class="table text-center">
			<thead class="thead-dark">
				<tr>
					<th>codigo</th>
					<th>Plan</th>
					<th>Invitados</th>
					<th>Precio</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($codigos as $codigo)
					<tr>
						<td>{{$codigo->codigo}}</td>
						<td>{{$codigo->plan->nombre}}</td>
						<td>{{$codigo->plan->invitados}}</td>
						<td>{{$codigo->plan->precio}}</td>
						<td>
							<a href="{{route('codigos.generatePDF',$codigo->id)}}" class="btn btn-outline-info">
								<i class="fas fa-file-pdf"></i>
							</a>
						</td>
						<td>
							<a href="{{route('codigos.destroy',$codigo->id)}}" class="btn btn-outline-danger">
								<i class="fas fa-trash-alt"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</article>
	<article class="col-md-3">
		{!! Form::open(['route'=>'codigos.store','method'=>'post']) !!}
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