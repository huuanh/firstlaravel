@extends('layout')

@section('content')
<h1>This is user show page!!</h1>
<div>
    first name:
    {!! $user->first_name !!}<br/>
    last name:
    {!! $user->last_name !!}<br/>
    email:
    {!! $user->email !!}
</div>
<hr/>
@stop

