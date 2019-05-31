@extends('templetes.main')
@section('titulo','Panel de Control de tu Evento')
@section('contenido')
		<section class="row">
			@can('eventos.create')
				<article class="col-md-2">
					{!! Form::open(['route'=>'eventos.validateCode','mehtod'=>'post']) !!}
						<div class="form-group">
							{!! Form::label('codigo','Nuevo Evento:') !!}
							{!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Ingresa tu codigo','autofocus','required']) !!}
						</div>
						<div class="form-group">
							{!! Form::submit('Validar',['class'=>'btn btn-success float-right']) !!}
						</div>

					{!! Form::close() !!}
				</article>
			@endcan
				@empty($user->evento)
				@else
					<article class="col-md-10 boda">
						@switch($user->evento->tipo_evento_id)
							@case(1)
								<h2>Nuestra Boda</h2>
								<h3 class="text-center">
									{{$user->name}}
									@empty($user->evento->cofestejado)
										</h3>
										<div class="d-flex justify-content-center">
											@include('eventos.addNovio')
										</div>
									@else
										<span>&</span> {{$user->evento->cofestejado}} </h3>
									@endempty
							@break
							@case(2)
								<h2>Mis XV Años</h2>
								<h3 class="text-center">
									{{$user->name}}
								</h3>
							@break
						@endswitch
						<hr>
						<p class="text-center">{{Date::parse($user->evento->fecha)->format('l j \d\e F \d\e Y')}}</p>
						<hr>
						<p class="text-center">
							<a href="{{route('eventos.show',$user->evento->id)}}" class="btn btn-outline-dark">Ver Detalles...</a>
						</p>
					</article>
				@endempty

				
		</section>
@endsection