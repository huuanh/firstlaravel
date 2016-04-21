@extends('layout')

@section('content')
	<h2> This page is page create new user...</h2>

	@foreach ($errors->all() as $error)
		<li>{!! $error !!}</li>
	@endforeach

	{!! Form::open() !!}
		<div class="form-group">
			{!! Form::text('first_name', '', ['class' => 'form-control', 'placeholder'=>'First Name..']) !!}
		</div>

        <div class="form-group">
            {!! Form::text('last_name', '', ['class' => 'form-control', 'placeholder'=>'Last Name..']) !!}
        </div>

		<div class="form-group">
            {!! Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Email..']) !!}
        </div>

        <div class="form-group">
            {!! Form::password('password', '', ['class' => 'form-control', 'placeholder'=>'Password..']) !!}
        </div>

		<div class="form-group">
			{!! Form::submit('Create User', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
@stop