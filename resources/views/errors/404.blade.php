@extends('layouts.error')

@section('title', '404')

@section('content')

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Página no disponible</h3>
			</div>
			<div class="panel-body text-center">
				<h4 class="text-warning">Lo sentimos la página que estas búscando no existe.</h4>
			</div>
			<div class="panel-footer text-right">
				<a href="{{ URL::previous() }}" class="btn btn-default btn-raised">Atrás</a>
			</div>
		</div>
	</div>
</div>

@endsection