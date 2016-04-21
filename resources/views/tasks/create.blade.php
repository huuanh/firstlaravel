@extends('layout')

@section('content')
    <h1> HELLO WORLD!WORLD! </h1>
	<h2> This page is page create new task...</h2>
		
	@foreach ($errors->all() as $error)
		<li>{!! $error !!}</li>
	@endforeach

	{!! Form::open() !!}
		<div class="form-group">
			{!! Form::text('name', '', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Create Task', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
@stop