@extends('templetes.main')
@section('titulo','Agregar Invitado')
@section('contenido')
	<div class="col-md-6">
		{!! Form::open(['route'=>'invitados.store','method'=>'post']) !!}
			<div class="form-group">
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="titulo1" name="titulo" class="custom-control-input" value="Sr.">
				  <label class="custom-control-label" for="titulo1">Sr.</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="titulo2" name="titulo" class="custom-control-input" value="Sra.">
				  <label class="custom-control-label" for="titulo2">Sra.</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="titulo3" name="titulo" class="custom-control-input" value="Srita.">
				  <label class="custom-control-label" for="titulo3">Srita.</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="titulo4" name="titulo" class="custom-control-input" value="Joven">
				  <label class="custom-control-label" for="titulo4">Joven</label>
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('name','Nombre:') !!}
				{!! Form::text('name',null,['class'=>'form-control','required','autofocus'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('appat','Apellido Paterno') !!}
				{!! Form::text('appat',null,['class'=>'form-control','required'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('apmat','Apellido Materno') !!}
				{!! Form::text('apmat',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('telefono','Telefono') !!}
				{!! Form::text('telefono',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Correo Electronico') !!}
				{!! Form::email('email',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
				<a href="{{route('clientes.index')}}" class="btn btn-danger">Cancelar</a>
			</div>
		{!! Form::close() !!}
	</div>
@endsection