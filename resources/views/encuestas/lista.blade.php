@extends('layouts.app')

@section('title', 'Encuestas')

@section('menu')

@include('menus.'.Session::get('type'))

@endsection

@section('content')

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Encuestas generadas</h3>
			</div>
			<div class="panel-body ">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nombre de la encuesta</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($polls as $poll)
								<tr>
									<td>{{ $poll->name }}</td>
									<td class="text-center">
										@if(Auth::user()->type == 'tutorado')
											@if(Auth::user()->answers()->where('poll_id', $poll->id)->count() >0)
												<a href="{{ route('responderEncuesta', $poll->id) }}" class="btn btn-primary btn-raised btn-mini disabled">contestada</a>
											@else
												<a href="{{ route('responderEncuesta', $poll->id) }}" class="btn btn-primary btn-raised btn-mini">responder</a>
											@endif
										@else
										<a href="{{ route('encuestas.show', $poll->id) }}" class="btn btn-primary btn-raised btn-mini">ver</a>
										{{-- <a href="" class="btn btn-primary btn-raised btn-mini">editar</a> --}}
										@endif
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