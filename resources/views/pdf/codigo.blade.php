<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');

		body{
			font-family: 'Roboto Condensed', sans-serif;
			text-align: justify-all;
		}

		h2 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>¡¡Felicidades!!</h2>
	
<p>
	Ahora tendrás un mejor control sobre tus invitados, recuerda que las especificaciones del Plan {{$codigo->plan->nombre}} son las siguientes:
</p>
<ul>
	<li>Puedes administrar hasta {{$codigo->plan->invitados}} invitados y sus acompañantes, </li>
	<li>Anexar sus correos electrónicos y teléfonos, nosotros los llamamos por ti.</li>
	<li>Puedes tener un reporte e quienes han confirmado en el momento que tú quieras</li>
	<li>Además, si tú lo deseas puedes generar un reporte después del evento para comparar tus invitados con las personas que asistieron.</li>
</ul>

<p>
	Solo ingresa tu código al momento de crear un evento nuevo
</p>
<h2>{{$codigo->codigo}}</h2>
<p>¿Dudas o comentarios? Por favor queremos saber hola@boda.com</p>
</body>
</html>