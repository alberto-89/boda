@extends('templetes.main')
@section('titulo','Precios')
@section('contenido')
	<section class="row">
		<article class="col-md-4">
			<div class="card">
			  <img src="{{asset('img/pool.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">50 Personas</h5>
			    <p class="card-text text-justify text-justify">Excelente para eventos pequeños, familiares o íntimos, aprovecha tus recursos al máximo y no dejes de disfrutar esa fecha especial.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Confirmación digital por parte de tus invitados</li>
			    <li class="list-group-item">Correos electrónicos de confirmación</li>
			    <li class="list-group-item">Llamadas telefónicas de confirmación</li>
			    <li class="list-group-item">Reporte de invitados</li>
			    <li class="list-group-item text-right"><b>$750</b></li>
			  </ul>
			  <div class="card-body">
			    <a href="#" class="btn btn-info">Contrtar</a>
			  </div>
			</div>
		</article>
		<article class="col-md-4">
			<div class="card">
			  <img src="{{asset('img/joven.jpg')}}" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">100 Personas</h5>
			    <p class="card-text text-justify">Se acerca ese festejo especial y todos quieren disfrutar de esta ocasión especial, celebra con amigos y que nadie se quede fuera.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Confirmación digital por parte de tus invitados</li>
			    <li class="list-group-item">Correos electrónicos de confirmación</li>
			    <li class="list-group-item">Llamadas telefónicas de confirmación</li>
			    <li class="list-group-item">Reporte de invitados</li>
			    <li class="list-group-item text-right"><b>$1,200</b></li>
			  </ul>
			  <div class="card-body">
			    <a href="#" class="btn btn-info">Contrtar</a>
			  </div>
			</div>
		</article>
		<article class="col-md-4">
			<div class="card">
			  <img src="{{asset('img/boda.jpg')}}" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">200 Personas</h5>
			    <p class="card-text text-justify">Es necesario que aproveches todos tus recursos, y que tus invitados celebren junto a ustedes este momento tan especial en sus vidas.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Confirmación digital por parte de tus invitados</li>
			    <li class="list-group-item">Correos electrónicos de confirmación</li>
			    <li class="list-group-item">Llamadas telefónicas de confirmación</li>
			    <li class="list-group-item">Reporte de invitados</li>
			    <li class="list-group-item text-right"><b>$2,000</b></li>
			  </ul>
			  <div class="card-body">
			    <a href="#" class="btn btn-info">Contrtar</a>
			  </div>
			</div>
		</article>
	</section>
@endsection