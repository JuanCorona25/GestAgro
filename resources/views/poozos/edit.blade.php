@extends('layouts.pozlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Pozo
			<a href="{{ route('pozo.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('poozos.fragment.error')
		{!! Form::model($poz, ['route' => ['pozo.update', $poz->id], 'method'=>'PUT']) !!}
			@include('poozos.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('poozos.fragment.aside')
	</div>

@endsection