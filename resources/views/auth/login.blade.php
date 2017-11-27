@extends('layouts.login')

@section('title', 'Login')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Bienvenido al TADDI</h3>
    </div>
    <div class="panel-body">
        <p class="text-center">Para iniciar sesión por favor ingresa tus datos.</p>
        <br>
        <ul class="nav nav-pills">
            <li role="presentation">
                <a href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li role="presentation" class="active">
                <a href="{{ route('login') }}">Login</a>
            </li>
            {{-- <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login/aspirante">Aspirantes</a></li> --}}
        </ul>
    {!! Form::open(['route' => 'login', 'method' => 'post']) !!}


        <div class="form-group label-floating">
            {!! Form::label('username',  'Numero de control o Usuario', ['class' => 'control-label']) !!}
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group label-floating">
            {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

    </div>{{-- Panel-body ends --}}
        <div class="panel-footer text-right">
            <button type="submit" class="btn btn-primary btn-raised">Acceder</button>
        </div>
    {!! Form::close() !!}

</div>{{-- Panel-primary ends --}}

@endsection
