<h2>Edit in here!</h2>

@extends('layout')

@section('content')
    <h1> HELLO WORLD!WORLD! </h1>
	<h2> This page is page edit new task...</h2>

	@foreach ($errors->all() as $error)
		<li>{!! $error !!}</li>
	@endforeach

	{!! Form::model($task, [
        'method' => 'PATCH',
        'route' => ['task.update', $task->id]
    ]) !!}

    <div class="form-group">
        {!! Form::label('name', 'name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', $task->name, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop