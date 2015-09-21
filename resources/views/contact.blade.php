@extends('layout')

@section('title')								
  Contact Us
@stop

@section('content')
  <h1>Contact Us.</h1>
  <p>For any inquiries, please send us a message using the form below:</p>
  
  {!! Html::ul($errors->all(), array('class'=>'errors')) !!}	

  {!! Form::open() !!}	
  <Table><tr>
  <td>{!! Form::label('subject') !!}</td>
  <td>{!! Form::text('subject') !!}</td>
  </tr><tr>
  <td>{!! Form::label('message') !!}</td>
  <td>{!! Form::textarea('message') !!}</td>
  </tr></table>
  {!! Form::submit() !!}
  {!! Form::close() !!}
@stop
