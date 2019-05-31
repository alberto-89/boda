@extends('templetes.main')
@section('titulo','Evento Nuevo')
@section('contenido')
		<section class="row">
			<div class="col-md-6 bodaBacground d-flex align-items-center justify-content-center">
				<h2 class="eventoBoda text-center">Nuestra Boda</h2>
			</div>
			<div class="col-md-6">
				<div class="card">
				  <div class="card-body">
				    {!! Form::open(['route'=>'eventos.store', 'method'=>'post']) !!}
				    	{!! Form::hidden('tipo_evento_id',1) !!}
						<div class="form-group">
						  	{!! Form::label('lugar','¿Dónde será tu evento?') !!}
						  	{!! Form::text('lugar', null, ['class'=>'form-control', 'placeholder'=>'Gran Salón'], 'required', 'autofocus') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('direccion','¿Cúal es la dirección?') !!}
						  	{!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Av. Principal 345 Col. Centro'], 'required') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('fecha','¿Cúando será tu evento?') !!}
						  	{!! Form::date('fecha', null, ['class'=>'form-control'], 'required') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('hora','¿A que hora será tu evento?') !!}
						  	{!! Form::time('hora', null, ['class'=>'form-control'], 'required') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('vestimenta','¿Tienes algun tipo de vestimenta para tu evento?') !!}
						  	{!! Form::text('vestimenta', null, ['class'=>'form-control', 'placeholder'=>'Formal ó Casual, etc..'], 'required') !!}
						 </div>
						 <div class="form-group">
						 	{!! Form::submit('Crear', ['class'=>'btn btn-success']) !!}
						 	<a href="#" class="btn btn-danger">Cancelar</a>
						 </div>
					{!! Form::close() !!}
				  </div>
				</div>
			</div>
		</section>
		<hr>
		<section class="row mt-3">
			<div class="col-md-6 xvBacground d-flex align-items-center justify-content-center">
				<h2 class="eventoXV text-center">Mis XV Años</h2>
			</div>
			<div class="col-md-6">
				<div class="card">
				  <div class="card-body">
				    {!! Form::open(['route'=>'eventos.store', 'method'=>'post']) !!}
				    	{!! Form::hidden('tipo_evento_id',2) !!}
						<div class="form-group">
						  	{!! Form::label('lugar','¿Dónde será tu evento?') !!}
						  	{!! Form::text('lugar', null, ['class'=>'form-control', 'placeholder'=>'Gran Salón'], 'required', 'autofocus') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('direccion','¿Cúal es la dirección?') !!}
						  	{!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Av. Principal 345 Col. Centro'], 'required') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('fecha','¿Cúando será tu evento?') !!}
						  	{!! Form::date('fecha', null, ['class'=>'form-control'], 'required') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('hora','¿A que hora será tu evento?') !!}
						  	{!! Form::time('hora', null, ['class'=>'form-control'], 'required') !!}
						 </div>
						 <div class="form-group">
						  	{!! Form::label('vestimenta','¿Tienes algun tipo de vestimenta para tu evento?') !!}
						  	{!! Form::text('vestimenta', null, ['class'=>'form-control', 'placeholder'=>'Formal ó Casual, etc..'], 'required') !!}
						 </div>
						 <div class="form-group">
						 	{!! Form::submit('Crear', ['class'=>'btn btn-success']) !!}
						 	<a href="#" class="btn btn-danger">Cancelar</a>
						 </div>
					{!! Form::close() !!}
				  </div>
				</div>
			</div>
		</section>
@endsection