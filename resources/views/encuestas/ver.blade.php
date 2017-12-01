@extends('layouts.app')

@section('title', 'Responder encuesta')

@section('menu')

@include('menus.'.Session::get('type'))

@endsection

@section('content')

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><b>ENCUESTA:</b> {{ strtoupper($encuesta->name)}}</h3>
			</div>
			<?php
				$res = json_decode($respuestas, true);
			?>
			<div class="panel-body" id="form-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Pregunta</th>
							<th>Respuesta</th>
						</tr>
					</thead>
					<tbody>
						@foreach($res as $respuesta)
						<tr>
							<td width="40%">
								{{ $respuesta['pregunta'] }}
							</td>
							<td>
								{{ $respuesta['respuesta'] }}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				{{-- {{$respuestas}} --}}

		    </div>{{-- Panel-body ends --}}
		        <div class="panel-footer text-right">
		        	<a href="{{ URL::previous() }}" class="btn btn-success btn-raised">regresar</a>	           
		        </div>
			</div>
		</div>
	</div>
</div>

@endsection
