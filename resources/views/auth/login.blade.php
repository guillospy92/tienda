
@extends('store.template')

@section('content')
	<br>
	<br><br>
	<div class="container text-center ">
		<div class="page-header">
			<h1><i class="fa fa-user"></i> Iniciar sesión</h1>

		</div>

		<div class="row">
			<div class="col-md-4">
				<br><br>
				<a class="btn btn-lg btn-primary colorfa" href=""><i class="apartar fa fa-facebook"></i>registrar con facebook</a>
				<a class="btn btn-lg btn-primary colorgo" href=""><i class="apartar fa fa-google"></i>registrar con google +</a>
			</div>
			<div class=" col-md-6">
				@include('store.partials.errors')
				<div >



					<form method="POST" action="{{route('login-get')}}">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label for="email">Email</label>
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Password</label>
					        <input class="form-control" type="password" name="password" id="password">
					    </div>

					    <div class="form-group">
							<a href="">recordar password</a>
					    </div>

					    <div class="form-group">
					        <button class="btn btn-success btn-block" type="submit">entrar</button>

					    </div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
@stop