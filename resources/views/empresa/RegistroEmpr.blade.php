<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro empresa</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/enterprise.css')}}">
</head>

<body>        
	
	<div class="container mt-4">
		<a href="{{route('empresa.cuenta')}}"><button type="button" class="btn btn-primary btn-sm custom-button active" id="button1">Mis productos</button></a>
		<a href="{{route('empresa.misdatos')}}"><button type="button" class="btn btn-primary btn-sm custom-button" id="button2">Mis datos</button></a>
		<a href="{{route('chatify')}}"><button type="button" class="btn btn-success btn-sm custom-button" id="button3">Centro de mensajeria</button></a> 

	</div>

		@if (@isset($errors) && $errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@if (session()->has('success'))

			<div class="alert alert-success">
				{{session()->get('success')}}
			</div>
				
		@endif
	<div class="container" id="container">

		<div class="form-container sign-in-container">
			<form method="POST" action="{{route('empresa.creacion_empr')}}" enctype="multipart/form-data">
				@csrf
				<h2>Registrar empresa</h2>
				<input type="number" name="nit" placeholder="Nit de empresa" />
				<input type="text" name="nombre" placeholder="Nombre de la empresa" />
				<input type="text" name="razon" placeholder="Razon social" />
				<input type="text" name="direccion" placeholder="Direccion" />
				<input type="email" name="email" placeholder="Correo Electrónico" />
				<input type="text" name="celular" placeholder="Celular" />
				<input type="password" name="password" placeholder="Contraseña" />
				<input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" />
				<div class="custom-file">
					<input type="file" accept="image/*" name="images[]" class="custom-file-input" multiple>
				</div>
				<br>
				<button>Registrate</button>
				<br>
				<span>Ya tienes cuenta ? <a class="a-en" href="{{route('cliente.login')}}">Iniciar sesión</a>.</span>
				
				<a>Al continuar, aceptas los Términos y Condiciones</a>

			</form>
		</div>
	</div>

	<footer>
		<p class="copyright">2023 RenovaGo &copy Todos los derechos reservados</p>
	</footer>
	<script src="login.js"></script>
</body>

</html>