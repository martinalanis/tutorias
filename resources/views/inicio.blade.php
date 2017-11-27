@extends('layouts.login')

@section('title', 'Inicio')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Bienvenido al TADDI</h3>
    </div>
    <div class="panel-body">
        <p class="text-center">Para iniciar sesión por favor selecciona el tipo de usuario.</p>
        <br>
        <ul class="nav nav-pills">
            <li role="presentation" class="active">
                <a href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li role="presentation">
                <a href="{{ route('login') }}">Login</a>
            </li>
            {{-- <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login/aspirante">Aspirantes</a></li> --}}
        </ul>
        
    </div> {{-- Panel-body ends --}}
</div>{{-- Panel-primary ends --}}

@endsection