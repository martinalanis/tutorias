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
								<th>Grupo</th>
								<th>Fecha</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection