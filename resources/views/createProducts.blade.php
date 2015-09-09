@extends('templates.main')


@section('content')

	<h2>Add new Product</h2>
			
	{!! Form::open(array('url' => 'foo/bar')) !!}
		<fielset>
			<label for="">Name.</label>
			<input type="text" name="" id="">

			<label for="">Email.</label>
			<input type="text" name="" id="">

			<label for="">Message.</label>
			<textarea type="text" name="" id=""></textarea>

			<input type="submit" value="Send">
		</fielset>
	{!! Form::close() !!}
	
@stop			