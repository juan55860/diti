@extends('layout')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-md-6">
			<h1>Sign Up</h1>
			{{ Form::open( ['route'=> 'register', 'method' =>'POST', 'role'=>'form', 'novalidate'] ) }}

			<div class="form-group">
				{{ Form::label('full_name','Nombre Completo') }}
				{{ Form::text('full_name', null, ['class' =>'form-control' ]) }}
			</div>

			<div class="form-group">
				{{ Form::label('email','Correo') }}
				{{ Form::email('email', null, ['class' =>'form-control' ]) }}
			</div>

			<div class="form-group">
				{{ Form::label('password','Clave') }}
				{{ Form::password('password', ['class' =>'form-control' ]) }}
			</div>

			<div class="form-group">
				{{ Form::label('password_confirmation','Repite Clave') }}
				{{ Form::password('password_confirmation',['class' =>'form-control' ]) }}
			</div>
			
			<p>
				<input type="submit" value="Register" class="btn btn-success"></input>
			</p>	
			{{ Form::close() }}
		</div>
	</div>
</div>

@endsection

