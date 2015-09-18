@extends('templates.main')


@section('content')

	<h2>{{$type->name}}</h2>

	@foreach($type->products as $product)
		<article class="group">
			<img src="{{asset('productphotos/'.$product->photo)}}" alt="">
			<a href="{{url('products/'.$product->id)}}"><h4>{{$product->name}}</h4></a>
			<p>{{$product->description}}</p>
			<span class="price"><i class="icon-dollar"></i>{{$product->price}}</span>
			<span class="addtocart"><a href="{{url('products/'.$product->id)}}"><i class="icon-plus"></i></a></span>
		</article>
	@endforeach

@stop