
@extends('layouts.credencial')
@section('title','Iniciar Sesion')
@section('content')
	<div class="container" id="container">

		<div class="form-container sign-in-container">
			<form method="POST" action="{{ route('cliente.inicioS') }}" class="submit-prevent-form">
				@csrf
				<br>
				<h3><strong>Iniciar Sesion</strong></h3>
				
				<br>
				<input id="email" type="email" placeholder="Correo" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<input id="password" type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
				@error('message')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<div class="row mb-1 ">
					<div class="col-md-1 ">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

							<label class="form-check-label" for="remember">
								{{ __('Recuerdame') }}
							</label>
						</div>
					</div>
				</div>
				
				<a><button type="submit"class="submit-prevent-button" >Entrar</button></a>
				<br>
				@if (Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}">
						{{ __('Olvidaste tu contraseña?') }}
					</a>
				@endif
				<span>Aún no tienes cuenta? <a class="a-en" href="{{route('cliente.registro')}}">Crear cuenta</a>.</span>
				<span>Eres una empresa? <a class="a-en" href="{{route('empresa.registro')}}">Crear cuenta corporativa</a>.</span>
				
				<a>Al continuar, aceptas los Términos y Condiciones</a>

			</form>
		</div>
		
	</div>

@endsection