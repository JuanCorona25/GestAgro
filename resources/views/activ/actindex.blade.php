@extends('layouts.actividadeslay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Actividades realizadas
			<a href="{{ route('activities.create') }}" class="btn btn-primary pull-right">Agregar</a>
		</h2>
		@include('clasif.fragment.info')
		<table class="table table-hover table-striped table-responsive">
			<thead>
				<tr>
					
					<th>Nombre de actividad</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($act as $acti)
					<tr>						
						<td>
							<strong>{{ $acti->actividadRealizada }}</strong>
						</td>									
						<td>
							<a href="{{ route('activities.show', $acti->id) }}" class="btn btn-primary">Detalles</a>
						</td>
						<td>
							<a href="" data-target="#modal-delete-{{$acti->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					    </td>
				</tr>
				@include('activ.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $act->render() !!}
		@include('activ.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection