@extends('templetes.main')
@section('titulo','Panel de Control de Administrador')
@section('contenido')
		<section class="row pt-3">
			<div class="col-md-4 pb-3">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Usuarios</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-dark">¡Ir!</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Tipo de Eventos</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="{{route('tipoEventos.index')}}" class="btn btn-dark">¡Ir!</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Planes</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="{{route('planes.index')}}" class="btn btn-dark">¡Ir!</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Códigos</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="{{route('codigos.index')}}" class="btn btn-dark">¡Ir!</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Tipo de Mesas</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="{{route('tipomesas.index')}}" class="btn btn-dark">¡Ir!</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Tipo de Asistencias</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="{{route('asistencias.index')}}" class="btn btn-dark">¡Ir!</a>
				  </div>
				</div>
			</div>
		</section>
@endsection