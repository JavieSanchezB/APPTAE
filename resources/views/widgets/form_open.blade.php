
@section('script_fin')
@parent
@if (Session::has('message'))
<script>
noty({ text: "{{ Session::get('message') }}",
	type: 'success'
});
</script>
@endif
@endsection




<div class="errorMessages"></div>

<div class="successMessages"></div>

@if(isset($$router))

@section('titulo_operacion')
Editar
@endsection

{!! Form::model($$router, ['route' => [$router.'.update', $$router->id], 'method' => 'patch', "name" => "updatePost",'class'=>'form-horizontal']) !!}
@else
@section('titulo_operacion')
Añadir {{$router}}
@endsection
{!! Form::open(['route' => $router.'.store', "name" => "createPost",'class'=>'form-horizontal']) !!}
@endif


