@extends('layouts.empleadolay')

@section('content')
	<div class="col-sm-8">
		<h5>
			Editar Empleado
			<a href="{{ route('empleado.index') }}"class="btn btn-default pull-right">Listado</a>
		</h5>
		@include('empleado.fragment.error')
		{!! Form::model($emplea, ['route' => ['empleado.update', $emplea->id], 'method' => 'PUT']) !!}
			@include('empleado.fragment.form')
		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		@include('empleado.fragment.aside')
	</div>
@endsection