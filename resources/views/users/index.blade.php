@extends('layout')

<h1>This is users index page !!</h1>

<button id="testWithJs">Hello</button>

@section('content')

{!! link_to_route('users.create', 'new user') !!}
<hr/>

@foreach($users as $user)

    {!! link_to_route('users.show', $user->email, $user->id) !!}
    {!! link_to_route('users.edit', 'edit', $user->id) !!}
    {!! Form::open(['method' => 'delete', 'route' => ['users.destroy', $user->id]]) !!}
    {!! Form::submit('Del') !!}
    {!! Form::close() !!}

@endforeach

@stop

<script>
    $('button#testWithJs').click(function() {
        console.log('I don-t believe');
//        alert('hello everybody, i am phpunit and I see U');
    });
</script>