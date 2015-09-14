@extends('templates.main')


@section('content')

	<h2>My Profile</h2>

	<h4>Username:</h4>
	<h5>{{$user->username}}</h5>

	<h4>Firstname:</h4>
	<h5>{{$user->firstname}}</h5>

	<h4>Lastname:</h4>
	<h5>{{$user->lastname}}</h5>

	<h4>Email:</h4>
	<h5>{{$user->email}}</h5>
			
	
@stop			