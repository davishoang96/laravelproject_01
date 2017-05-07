@extends('layouts.master')

@section('content')

<h1>This is my array page</h1>

	@if(count($array) > 0)
		@foreach($array as $each_element)
			<h2>{{$each_element}}</h2> <br>
		@endforeach
	@else
		<h1>Nothing to show here!</h1>
	@endif

@endsection

