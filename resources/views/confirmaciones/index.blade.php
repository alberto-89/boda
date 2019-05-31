@extends('templetes.main')
@section('titulo','Confirmar Asistencia')
@section('portada')
<header class="container-fluid dashCover d-flex align-items-center justify-content-center">
    <section class="col-md-4 confirmar">
			<h1 class="text-center">Confirma tu Asistencia</h1>
			<hr>
			{!! Form::open(['route'=>'confirmaciones.show','method'=>'get']) !!}
				<div class="form-group">
					{!! Form::label('codigo','Ingresa el Codigo:') !!}
					{!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo','required','autofocus']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Confirmar',['class'=>'btn btn-success']) !!}
				</div>
			{!! Form::close() !!}
		</section>
</header>
@endsection