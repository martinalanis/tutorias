@extends('layouts.login')

@section('title', 'Selección')

@section('style')

<style type="text/css">
    #options {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar .navbar-nav > li > a {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .navbar .navbar-nav > li > a:hover,
    .navbar .navbar-nav > li > a:focus {
        background: rgba(0,0,0,0.2);
    }
</style>

@endsection

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Bienvenido {{Auth::user()->name}} al TADDI</h3>
    </div>
    <div class="panel-body">
        <p class="text-center">Seleccione el rol deseado para ingresar.</p>
        <br>
        <nav class="navbar navbar-default">
            <div >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="collapse-menu-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('inicio') }}">Perfil</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        {{-- <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login/aspirante">Aspirantes</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>

        <div id="options">
            
            @foreach(Auth::user()->roles->unique('rol') as $rol)

                <a href="{{ url('/'.$rol->rol) }}" class="btn btn-info btn-raised">{{ ucwords($rol->rol) }}</a>

            @endforeach

        </div>



    </div>{{-- Panel-body ends --}}
        

</div>{{-- Panel-primary ends --}}

@endsection
