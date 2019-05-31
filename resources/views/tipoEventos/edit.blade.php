@extends('templetes.main')
@section('titulo','Administrar Tipode Eventos')
@section('contenido')
<section class="row pt-3">
	<article class="col-md-6">
		{!! Form::open(['route'=>['tipoEventos.update',$tipo->id],'method'=>'put']) !!}
			<div class="form-group">
				{!! Form::label('tipo','Tipo de Evento:') !!}
				{!! Form::text('tipo',$tipo->tipo,['class'=>'form-control','autofocus','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('descripcion','Descripción de Evento:') !!}
				{!! Form::textarea('descripcion',$tipo->descripcion,['class'=>'form-control','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Agregar',['class'=>'btn btn-success']) !!}
				<a href="{{route('tipoEventos.index')}}" class="btn btn-danger">Cancelar</a>
			</div>
		{!! Form::close() !!}
	</article>
</section>
@endsection