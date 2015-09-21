@extends('layout')

@section('title')								
  {{$publication->title}}
@stop

@section('content')
  <h1>{{$publication->title}}</h1>
  
  <p>{{$publication->text}}</p>
@stop
