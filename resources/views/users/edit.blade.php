@extends('layout')

@section('content')
    <h1>This is user edit page!!</h1>


	@foreach ($errors->all() as $error)
		<li>{!! $error !!}</li>
	@endforeach

    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
    {!! Form::text('first_name', $user->first_name) !!}
    {!! Form::text('last_name', $user->last_name) !!}
    {!! Form::text('email', $user->email) !!}
    {!! Form::submit('edit user') !!}
    {!! Form::close() !!}
@stop