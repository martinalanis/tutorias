<div class="collapse navbar-collapse" id="collapse-menu-1">
	<ul class="nav navbar-nav">
		<li><a href="{{ route('login') }}">Inicio</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Tutorados <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Altas</a></li>
				<li><a href="#!">Bajas</a></li>
				<li><a href="#!">Cambiar contraseña</a></li>
				<li><a href="#!">Constancia</a></li>				
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Documentos <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Ver y descargar</a></li>
				<li><a href="#!">Cargar</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Reportes <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Reporte semestral</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Evaluación <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Ver / Imprimir</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Consultas <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Kárdex</a></li>
				<li><a href="#!">Expediente</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Anexos <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="{{ route('anexo19.index') }}">Anexo 19</a></li>
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