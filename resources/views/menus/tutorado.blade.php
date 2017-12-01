<div class="collapse navbar-collapse" id="collapse-menu-1">
	<ul class="nav navbar-nav">
		<li><a href="{{ route('login') }}">Inicio</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Anexos <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Formato de entrevista 1</a></li>
				<li><a href="#!">Formato de entrevista 2</a></li>
				<li><a href="#!">Linea de vida</a></li>
				<li><a href="#!">Análisis FODA</a></li>
				<li><a href="#!">Habilidades de estudio</a></li>
				<li><a href="#!">Estilos de aprendizaje</a></li>
				<li><a href="#!">Test de autoestima</a></li>
				<li><a href="#!">Test de asertividad</a></li>
			</ul>
		</li>
		<li><a href="#!">Evaluaciones</a></li>
		<li><a href="#!">Tutorías</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Consultar <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Formato de entrevista 1</a></li>
				<li><a href="#!">Formato de entrevista 2</a></li>
				<li><a href="#!">Linea de vida</a></li>
				<li><a href="#!">Análisis FODA</a></li>
				<li><a href="#!">Habilidades de estudio</a></li>
				<li><a href="#!">Estilos de aprendizaje</a></li>
				<li><a href="#!">Test de autoestima</a></li>
				<li><a href="#!">Test de asertividad</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-submenu>Documentos <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#!">Ver documentos</a></li>
				<li><a href="#!">Cargar documentos</a></li>
			</ul>
		</li>
		<li><a href="{{ route('encuestas') }}">Encuestas</a></li>
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