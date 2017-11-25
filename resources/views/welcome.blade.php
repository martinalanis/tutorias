<!DOCTYPE html>
<html>
    <head>
        <title>Taddi</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('/css/sii.css') }}">
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Bienvenido al TADDI</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p>Para iniciar sesión por favor selecciona el tipo de usuario.</p>
                        <br>
                        <ul class="nav nav-pills">
                            <li role="presentation" class="active"><a href="{{ route('inicio') }}">Inicio</a></li>
                            <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login">Tutorado</a></li>
                            <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login/administrativo">Tutor</a></li>
                            <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login/alumno">Coordinador</a></li>
                            <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login/familiar">Administrador</a></li>
                            {{-- <li role="presentation"><a href="https://sii.itmorelia.edu.mx/login/aspirante">Aspirantes</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br><br><br>
        <footer class="footer" id="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <span>Todos los derechos reservados © 2017. <a href="http://itmorelia.edu.mx" target="_blank">Instituto Tecnológico de Morelia</a>.</span>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
