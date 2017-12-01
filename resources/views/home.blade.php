@extends('layouts.app')

@section('title', 'Tutorado')

@section('menu')

@include('menus.'.Session::get('type'))

@endsection

@section('content')


<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Bienvenido al Sistema Integral de Información</h3>
			</div>
			<div class="panel-body text-center">
				<br>
				<div class="col-sm-8 col-sm-offset-2">
					<img src="{{ asset('img/taddi.png') }}" alt="" class="img-responsive">
				</div>
				<div class="clearfix"></div>
				<br>
				<h4>({{ Auth::user()->username }})<br>{{Auth::user()->name.' '.Auth::user()->last_name.' '.Auth::user()->second_last_name}}</h4>
			</div>
		</div>
	</div>
</div>

@endsection