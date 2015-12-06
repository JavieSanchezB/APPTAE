@section('titulo_operacion')
Listado
@endsection


@if ($action_add)

<td width="60" align="center">
	{!! Html::link(route($router.'.create'), 'Añadir', array('class' => 'btn btn-success btn-md')) !!}
</td>
<br>
<br>
@endif


<table id="datatable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	
	<thead>
		<tr>
			@forelse($titulos as $title)
			<th>{{ $title }}</th>
			@endforeach

			@forelse($actions as $action)
			<th>{{ $action->titulo }}</th>
			@endforeach


			@if ($action_edit)
			<th>Editar</th>
			@endif
			@if ($action_delete)
			<th>Eliminar</th>
			@endif


		</tr>
	</thead>

	<tbody>
		@forelse($datos as $fila)
		<tr>
			@forelse($titulos as $title)
			<td>{{ $fila->{$title} }}</td>
			@endforeach


			@forelse($actions as $action)
			
			<td width="60" align="center">
				{!! Html::link(route($action->url, $fila->{$primary_key}),$action->titulo , array('class' => 'btn btn-success btn-md')) !!}
			</td>

			@endforeach



			@if ($action_edit)

			<td width="60" align="center">
				{!! Html::link(route($router.'.edit', $fila->{$primary_key}), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
			</td>
			
			@endif

			@if ($action_delete)
			<td width="60" align="center">
				{!! Form::open(array('route' => array($router.'.destroy', $fila->{$primary_key}), 'method' => 'DELETE')) !!}
				<button type="submit" class="btn btn-danger btn-md">Delete</button>
				{!! Form::close() !!}
			</td>
			@endif
		</tr>
		@endforeach
	</tbody>

</table>