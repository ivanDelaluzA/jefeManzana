@extends('layouts.masterComplete')
@section('title', 'login')
@section('content')
@if (count($errors)>0)
<ul>
	@foreach ($errors->all() as $error)
	<li><strong>{{  $error }}</strong></li>
	@endforeach
</ul>
@endif
<div class="row" style="padding-top: 35px; text-align: center;">
<div class="panel panel-default, col-md-4 col-md-offset-4" style="background-color: #E4F1FE">
  <div class="panel-body">
	{!! Form::open(['url' => '/auth/login', null,'class'=>'form-signin']) !!}
		<h1>Iniciar Sesion</h1>
		<label for="inputEmail" class="sr-only">Email</label>
		<input type="email" id="inputEmail"   name="email" class="form-control" placeholder="Email" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<div class="checkbox">
			<label>
				<input type="checkbox" value="Recuerdame"> Recuerdame
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
	{!! Form::close() !!}
</div>
</div>
</div>
@stop