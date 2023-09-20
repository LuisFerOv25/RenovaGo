<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro empresa</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/enterprise.css')}}">
</head>

<body>

	<div class="container" id="container">

		<div class="form-container sign-in-container">
			<form action="#">
				<h1>Registrar empresa</h1>
				<br>
				<input type="text" placeholder="Nombre de la empresa" />
				<input type="text" placeholder="Razon social" />
				<input type="text" placeholder="Direccion" />
				<input type="email" placeholder="Correo Electrónico" />
				<input type="text" placeholder="Celular" />
				<input type="password" placeholder="Contraseña" />
				<input type="password" placeholder="Confirmar Contraseña" />
				<br>
				<button>Registrate</button>
				<br>
				<span>Ya tienes cuenta ? <a class="a-en" href="login.html">Iniciar sesión</a>.</span>
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