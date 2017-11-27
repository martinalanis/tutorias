<div class="collapse navbar-collapse" id="collapse-menu-1">
	<ul class="nav navbar-nav">
		<li><a href="{{ route('login') }}">Inicio</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Altas <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Carreras</a></li>
				<li><a href="#!">Profesores</a></li>
				<li><a href="#!">Grupos</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Consultar <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Alumnos</a></li>
				<li><a href="#!">Profesores</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Catalogos <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Carreras</a></li>
				<li><a href="#!">Grupos</a></li>
				<li><a href="#!">Tutores</a></li>
				<li><a href="#!">Coordinadores</a></li>
				<li><a href="#!">Archivos</a></li>
				<li><a href="#!">Imagenes</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Cargar <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Archivos</a></li>
				<li><a href="#!">Imagenes</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Constancias <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Alumno</a></li>
				<li><a href="#!">Tutor</a></li>
				<li><a href="#!">Coordinador</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Imprimir <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Encuestas</a></li>
				<li><a href="#!">Reporte semestral</a></li>
				<li><a href="#!">Evaluaciones</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Administrar TADDI <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Cambiar contraseña de profesor</a></li>
				<li><a href="#!">Cambiar contraseña de alumno</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Avisos <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Nuevo aviso</a></li>
				<li><a href="#!">Ver aviso</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Opciones <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Perfil</a></li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
				</li>
			</ul>
		</li>
	</ul>
</div>