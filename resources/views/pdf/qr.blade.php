<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QR</title>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
		@page 
			{
				margin: 0px;
			}
		body 
			{ 
				font-family: 'Roboto Condensed', sans-serif;
				margin: 0px; 
				line-height: .5em;
				text-align: center;
				font-size: .4rem;
				background-image: url(http://prueba.fadelle.com.mx/img/ticketsQr.jpg);
				background-size: cover;
				background-repeat: no-repeat; 
				background-position: center;
			}
			h1{
				margin-top: 1rem;
			}
	</style>
</head>
<body>
	<section>
		@foreach($invitados as $invitado)
			<article>
				<br>
				<h1>{{$invitado->name}}</h1>
				<p>Te agradecemos que nos confirmes tu asistencia antes del {{Date::parse($evento->fecha->subDays(14))->format('l j \d\e F \d\e Y')}}</p>
				<p>Ingresa a www.boda.com/confirmar</p>
				<p>e ingresa el siguiente codigo</p>
				<h2>{{$invitado->codigo}}</h2>
				<p>o simplemente escanea el codigo con tu smartphone</p>
				<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->margin(1)->generate(url('/codigo?codigo=').$invitado->codigo)) !!} ">
			</article>
		@endforeach
	</section>
</body>
</html>