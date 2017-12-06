@extends('layouts.app')

@section('title', 'Ver Anexo 19')

@section('menu')

@include('menus.'.Session::get('type'))

@endsection

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><b>Anexo 19:</b> {{ strtoupper($anexo->group->identifier)}}</h3>
			</div>
			<div class="panel-body" id="form-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center" colspan="8">
								INSTITUTO TECNOLÓGICO DE MORELIA: Departamento de {{$anexo->dpto}}
							</th>
						</tr>
						<tr>
							<th class="text-center" colspan="6">
								NOMBRE DEL TUTOR: {{$anexo->user->name.' '.$anexo->user->last_name.' '.$anexo->user->second_last_name}}
							</th>
							<th colspan="2">
								Fecha:
							</th>
						</tr>
						<tr>
							<th colspan="5">
								Programa Educativo: {{$anexo->programa}}
							</th>
							<th colspan="1">
								Grupo: {{$anexo->group->identifier}}
							</th>
							<th colspan="2">
								Hora:
							</th>
						</tr>
						<tr class="text-center">
							<th rowspan="2"></th>
							<th rowspan="2">Control</th>
							<th rowspan="2">Lista Estudiantes</th>
							<th colspan="2">Estudiantes atendidos en el semestre</th>
							<th rowspan="2">Estudiantes canalizados en el semestre</th>
							<th colspan="2">Área canalizada</th>
						</tr>
						<tr class="text-center">
							<th>Tutoria Grupal</th>
							<th>Tutoria Individual</th>
							<th>Observaciones</th>
							<th>% Asistencia</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$data = json_decode($anexo->data, true);
							$i = 1;
						?>

						@foreach($data as $d)
						<tr>
							<td>{{ $i }}</td>
							<td>
								{{$d['control']}}
							</td>
							<td>
								{{$d['nombre']}}
							</td>
							<td class="text-center">
								@if(isset($d['grupal']))
								x
								@endif
							</td>
							<td class="text-center">
								@if(isset($d['individual']))
								x
								@endif
							</td>
							<td>{{$d['est_can']}}</td>
							<td>{{$d['observaciones']}}</td>
							<td class="text-center">{{$d['asistencia']}}</td>
						</tr>
						<?php
							$i++;
						?>
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
