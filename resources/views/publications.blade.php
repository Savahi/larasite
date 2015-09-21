@extends('layout')

@section('title')								
  Publications
@stop

@section('content')
  <h1>Publications</h1>
  
  <ul>
    @foreach($publications as $publication)					
	<li>
	  <p><a href='/publications/{{$publication->id}}/'>{{ $publication->title }}</a></p>					
	</li>
	@endforeach
  </ul>

@stop
