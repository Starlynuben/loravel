@extends('templates.main')


@section('content')

	<h2>Edit User</h2>
			
	{!! Form::model($user,array('url' => 'users/'.$user->id,'method'=>'put')) !!}
		<fielset>
			{!! Form::label('username', 'Username');!!}
			{!! Form::text('username') !!}
			{!! $errors->first('username','<p class="error">:message<p>')!!}

			{!! Form::label('firstname', 'First name');!!}
			{!! Form::text('firstname') !!}
			{!! $errors->first('firstname','<p class="error">:message<p>')!!}

			{!! Form::label('lastname', 'Last name');!!}
			{!! Form::text('lastname') !!}
			{!! $errors->first('lastname','<p class="error">:message<p>')!!}

			{!! Form::label('email', 'Email');!!}
			{!! Form::email('email') !!}
			{!! $errors->first('email','<p class="error">:message<p>')!!}

			<input type="submit" value="Update User">
		</fielset>
	{!! Form::close() !!}
	
@stop			