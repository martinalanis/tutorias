<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Taddi</title>


    <!-- Styles -->
    <link href="{{ asset('css/sii.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
	<header id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <img src="{{ asset('/img/logo_sep.png')}}" alt="Secretaría de Educación Pública" class="img-responsive full-height">
                </div>
                <div class="col-sm-6 text-center">
                    <h1 class="header-title">Sistema Integral de Información</h1>
                    <h2 class="header-subtitle">Instituto Tecnológico de Morelia</h2>
                    <h3 class="header-user"></h3>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <img src="{{ asset('/img/logo_it.png')}}" alt="Secretaría de Educación Pública" class="img-responsive full-height center-block">
                </div>
            </div>
        </div>  
    </header>   <br><br><br class="hidden-xs">

    <div class="container" id="main-container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                @yield('content')
            </div>
        </div>
    </div>
	<footer class="footer" id="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span>Todos los derechos reservados © {{ date('Y') }}. <a href="http://itmorelia.edu.mx" target="_blank">Instituto Tecnológico de Morelia</a>.</span>
                </div>
            </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-2.0.2.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sii.js') }}"></script>
</body>
</html>
