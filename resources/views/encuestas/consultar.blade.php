@extends('layouts.app')

@section('title', 'Encuestas')

@section('menu')

@include('menus.'.Session::get('type'))

@endsection

@section('content')

<div class="row">
	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Preguntas de la encuesta: {{ $poll->name }}</h3>
			</div>
			<?php
				$preguntas = json_decode($poll->poll, true);
			?>
			<div class="panel-body ">
				<ul class="list-group">
					@foreach($preguntas as $pregunta)
					<li class="list-group-item">{{ $pregunta['value'] }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>

	<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Alumnos que han respondido</h3>
			</div>
			<div class="panel-body ">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($poll->answers as $answer)
								<tr>
									<td>{{ $answer->name.' '.$answer->last_name.' '.$answer->second_last_name }}</td>
									<td class="text-center">										
										<a href="{{ route('verRespuesta', $answer->id) }}" class="btn btn-primary btn-raised btn-mini">ver</a>
									</td>
								</tr>
								{{-- {{dd($answer)}} --}}
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection