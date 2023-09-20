<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro usuario</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/registrer.css')}}">
	
</head>

<body>
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
			<form method="POST" action="{{route('cliente.autenticar')}}" enctype="multipart/form-data">
				@csrf
				<h3>Registrar usuario</h3>
				<input type="text" name="cedula" placeholder="Cedula" value="{{old('cedula')}}"/>
				<input type="text" name="nombre" placeholder="Nombres completos" value="{{old('nombre')}}"/>
				<input type="text" name="direccion" placeholder="Direccion" value="{{old('direccion')}}"/>
				<input type="email" name="email" placeholder="Correo Electrónico" value="{{old('email')}}"/>
				<input type="text" name="celular" placeholder="Celular" value="{{old('celular')}}"/>
				<input type="password" name="password" placeholder="Contraseña" value="{{old('password')}}"/>
				
				<input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" />
				</select>
				<div class="custom-file">
					<input type="file" accept="image/*" name="images[]" class="custom-file-input" multiple>
				</div>
				<br>
				<button  type="submit" >Registrate</button>
				<br>
				<span>Ya tienes cuenta ? <a class="a-en" href="{{route('cliente.login')}}">Iniciar sesión</a>.</span>
				<br>
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