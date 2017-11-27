@extends('layouts.app')

@section('title', 'Nueva encuesta')

@section('menu')

@include('menus.tutor')

@endsection

@section('style')

<style type="text/css">
	.sub {
		display: block;
		padding: 10px 15px;
		background: #444;
		color: #FFF;
	}
</style>

@endsection

@section('content')

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Encuestas generadas</h3>
			</div>
			<div class="panel-body" id="form-body">
				{!! Form::open(['route' => 'encuestas.store', 'method' => 'post']) !!}

				<div class="form-group label-floating">
		            {!! Form::label('name',  'Nombre de la encusta', ['class' => 'control-label']) !!}
		            {!! Form::text('name', null, ['class' => 'form-control']) !!}
		        </div>
				
				<div class="col-sm-4 col-sm-offset-4">
		        	<h4 class="text-center sub">Preguntas</h4>
		        </div>
		        <div class="clearfix"></div>

		        <div class="form-group label-floating">
		            {!! Form::label('pregunta[]',  'Ingrese pregunta', ['class' => 'control-label']) !!}
		            {!! Form::text('pregunta[]', null, ['class' => 'form-control']) !!}
		        </div>

		        <div class="form-group label-floating">
		            {!! Form::label('pregunta[]',  'Ingrese pregunta', ['class' => 'control-label']) !!}
		            {!! Form::text('pregunta[]', null, ['class' => 'form-control']) !!}
		        </div>

		        <div class="form-group label-floating">
		            {!! Form::label('pregunta[]',  'Ingrese pregunta', ['class' => 'control-label']) !!}
		            {!! Form::text('pregunta[]', null, ['class' => 'form-control']) !!}
		        </div>

		        <div class="form-group label-floating">
		            {!! Form::label('pregunta[]',  'Ingrese pregunta', ['class' => 'control-label']) !!}
		            {!! Form::text('pregunta[]', null, ['class' => 'form-control']) !!}
		        </div>

		        <div class="form-group label-floating">
		            {!! Form::label('pregunta[]',  'Ingrese pregunta', ['class' => 'control-label']) !!}
		            {!! Form::text('pregunta[]', null, ['class' => 'form-control']) !!}
		        </div>

		    </div>{{-- Panel-body ends --}}
		        <button id="add" class="btn btn-warning btn-raised">Agregar pregunta</button>

		        <div class="panel-footer text-right">
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
	$("#add").click(function(e){
		// alert('clcic');
		e.preventDefault();
		$("form").append('<div class="form-group label-floating is-empty"><label for="pregunta[]" class="control-label">Ingrese pregunta</label><input class="form-control" name="pregunta[]" type="text"></div>');
	});
</script>
@endsection