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
	        <div class="panel-footer text-right">
	        	<a href="{{ route('encuestas.index') }}" class="btn btn-success btn-raised">regresar</a>	           
	        </div>
		</div>
	</div>

	<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Alumnos que han respondido</h3>
			</div>
			<div class="panel-body">
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
										<a href="" class="btn btn-primary btn-raised btn-mini" onclick="event.preventDefault();document.getElementById('ver{{ $answer->id }}').submit();">ver</a>
										{{ Form::open(['route' => 'verRespuesta', 'type' => 'post', 'id' => 'ver'.$answer->id, 'style' => 'display: inline-block;']) }}
		                                    {{ Form::hidden('nombre', $poll->name) }}
		                                    {{ Form::hidden('respuestas', $answer->pivot->answer) }}
		                                {{ Form::close() }}
									</td>
								</tr>
								{{-- {{dd($info)}} --}}
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection