@extends ('layout')

@section('content')

    <h1>This is index page!! </h1>

    {!! link_to_route('task.create', 'new task') !!}
    <table class="table">
        <thead>
            <th>ID</th>
            <th>name</th>
            <th class="col-md-1"></th>
            <th class="col-md-1"></th>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{!! $task->id !!}</td>
                <td><a class="btn btn-primary" href="{!! URL::route('task.show', $task->id) !!}">{!! $task->name !!}</a></td>
                <td><a class="btn btn-primary" href="{!! URL::route('task.edit', $task->id) !!}">Edit</a></td>
                <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['task.destroy', $task->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
