@extends('layouts.app')

@section('title', 'Nuevo Anexo 19')

@section('menu')

@include('menus.'.Session::get('type'))

@endsection

@section('style')

<style type="text/css">
	.sub {
		display: block;
		padding: 10px 15px;
		background: #444;
		color: #FFF;
	}

	#response table td {
		padding: 0 15px;
	}
</style>

@endsection

@section('content')

<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Reporte Semestral del Tutor</h3>
			</div>
			<div class="panel-body" id="form-body">
				{!! Form::open(['route' => 'anexo19.store', 'method' => 'post']) !!}

				<div class="form-group label-floating col-sm-5">
		            {!! Form::label('dpto',  'Departamento de:', ['class' => 'control-label']) !!}
		            {!! Form::text('dpto', null, ['class' => 'form-control', 'required']) !!}
		        </div>

		        <div class="form-group label-floating col-sm-5">
		            {!! Form::label('programa',  'Programa educativo:', ['class' => 'control-label']) !!}
		            {!! Form::text('programa', null, ['class' => 'form-control', 'required']) !!}
		        </div>

		        <div class="form-group label-floating col-sm-2">
		            {!! Form::label('group_id',  'Grupo:', ['class' => 'control-label']) !!}
		            {!! Form::select('group_id', $groups, '', ['class' => 'form-control','required', 'id' => 'group','placeholder' => '']) !!}
		        </div>

		        <div class="col-sm-4 col-sm-offset-4">
		        	<h4 class="text-center sub">Alumnos</h4>
		        </div>
				
		        <div class="clearfix"></div>

		        <div class="row" id="response" style="margin-top: 30px; padding: 0 15px;">		        
		        </div>

		    </div>{{-- Panel-body ends --}}

		        <div class="panel-footer text-right">
		        	<a href="{{ URL::previous() }}" class="btn btn-default">regresar</a>
		            <button type="submit" class="btn btn-primary btn-raised">Guardar</button>
		        </div>
		    {!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$("#group").change(function(){
		var id = $(this).val();
		$.ajax({
			url: '{{ url('tutor/getAlumnos') }}' + '/' + id,
			type: 'GET',
			success: function(res){

				var str = "";

				$.each(JSON.parse(res), function(i, alumno){

					str += `<table class="table table-bordered">
								<thead>
									<tr>
										<th width="40%">${alumno.username}</th>
										<th>${alumno.name} ${alumno.last_name} ${alumno.second_last_name}</th>
									</tr>
				        		</thead>
				        		<tbody>
				        			<tr>
				        				<td>
				        					<div class="form-group label-floating">
				        						<label for="tut_grupal[]" class="control-label">Tutoria Grupal:</label>
												<input type="text" name="tut_grupal[]" class="form-control" required>
									        </div>
				        				</td>
				        				<td>
				        					<div class="form-group label-floating">
				        						<label for="tut_individual[]" class="control-label">Tutoria Individual:</label>
												<input type="text" name="tut_individual[]" class="form-control" required>
									        </div>
				        				</td>
				        			</tr>
				        			<tr>
				        				<td>
				        					<div class="form-group label-floating">
				        						<label for="observaciones[]" class="control-label">Observaciones:</label>
												<input type="text" name="observaciones[]" class="form-control" required>
								            </div>
				        				</td>
				        				<td>
				        					<div class="form-group label-floating">
				        						<label for="asistencia[]" class="control-label">% Asistencia:</label>
												<input type="text" name="asistencia[]" class="form-control" required>
								            </div>
				        				</td>
				        			</tr>
				        			<tr>
				        				<td colspan="2">
				        					<div class="form-group label-floating">
				        						<label for="est_can[]" class="control-label">Estudiantes canalizados en el semestre:</label>
												<input type="text" name="est_can[]" class="form-control" required>
								            </div>
				        				</td>
				        			</tr>
				        			<input type="hidden" name="control[]" value="${alumno.username}">
				        			<input type="hidden" name="nombre[]" value="${alumno.name} ${alumno.last_name} ${alumno.second_last_name}">
				        		</tbody>
		        	</table>`;
				});

				$("#response").html(str);
			},
			error: function(res){
				alert(res);
			}
		});
	});
</script>
@endsection