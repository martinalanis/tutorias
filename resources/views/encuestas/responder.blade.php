@extends('layouts.app')

@section('title', 'Responder encuesta')

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

	.form-group.label-floating label.control-label {
		color: #111;
	}

	.form-group.is-focused label.control-label {
		color: #009688;
	}
</style>

@endsection

@section('content')

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><b>ENCUESTA:</b> {{ strtoupper($poll->name)}}</h3>
			</div>
			<div class="panel-body" id="form-body">
				{!! Form::open(['route' => 'encuestas.store', 'method' => 'post']) !!}
				<?php
					$preguntas = json_decode($poll->poll, true);
				?>

					{{-- {{ dd($preguntas) }} --}}
				@foreach($preguntas as $pregunta)

			
				<div class="form-group label-floating">

		            {!! Form::label('respuesta[]', $pregunta['value'].':' , ['class' => 'control-label']) !!}
		            {!! Form::text('respuesta[]', null, ['class' => 'form-control']) !!}
		            {!! Form::hidden('pregunta[]', $pregunta['value']) !!}
		        </div>

				@endforeach
				

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
