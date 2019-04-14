@extends('layouts.app')

@section('content')
	{{$title}}
	@if(count($services) > 0)
		<ul>
			@foreach ($services as $service)
				<li>{{$service}}</li>
			@endforeach
		</ul>
	@endif
@endsection
