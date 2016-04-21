<h1>Login</h1>


{!! Form::model(null, ['method' => 'POST', 'route' => ['/login']]) !!}
<p>
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::text('email', ['placeholder' => 'awesome@awesome.com']) !!}
</p>

<p>
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}
</p>

<p>{!! Form::submit('Login') !!}</p>
{!! Form::close() !!}