
<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
</head>
<body>
@include('msj.msj')
@include('msj.alert')
<div id="contenedor">
	<div id="header">
		@yield('header')
	</div>
	<div id="contenido">
		<div id="menu">
			@yield('menu')
		</div>
		<div id="rigth">
			@yield('content')
		</div>
	</div>
	
</div>

@yield('style')
</body>
</html>