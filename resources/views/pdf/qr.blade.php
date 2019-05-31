<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QR</title>

	<style>
		@page { margin: 0px; }
		body { margin: 0px; line-height: .5em; }
	</style>
</head>
<body>
	<section>
		@foreach($invitados as $invitado)
			<article style="text-align: center; font-size: .3rem;">
				<h1>{{$invitado->name}}</h1>
				<p>Te agradecemos que nos confirmes tu asistencia antes del {{Date::parse($evento->fecha->subDays(14))->format('l j \d\e F \d\e Y')}}</p>
				<p>Ingresa a www.boda.com/confirmar</p>
				<p>e ingresa el siguiente codigo</p>
				<h2>{{$invitado->codigo}}</h2>
				<p>o simplemente escanea el codigo con tu smartphone</p>
				<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate(url('/codigo?codigo=').$invitado->codigo)) !!} ">
			</article>
		@endforeach
	</section>
</body>
</html>