@extends('layouts.app')

@section('title', 'Anexo 19')

@section('menu')

@include('menus.'.Session::get('type'))

@endsection

@section('content')

<div class="row">
	<div class="col-sm-8 col-sm-offset-2" style="margin-bottom: 30px;">
	    <a href="{{ route('anexo19.create') }}" class="btn btn-warning btn-raised pull-right">nuevo anexo</a>
	</div>
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Anexo 19</h3>

			</div>
			<div class="panel-body ">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Departamento.</th>
								<th>Grupo</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($anexos as $anexo)
							<tr>
								<td>{{ $anexo->dpto }}</td>
								<td>{{ $anexo->group->identifier }}</td>
								<td>
									<a href="{{ route('anexo19.show', $anexo->id) }}" class="btn btn-primary btn-raised btn-mini">ver</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection