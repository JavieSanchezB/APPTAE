

@if($errors->has())
<div class='alert alert-danger'>
	@foreach ($errors->all('<p>:message</p>') as $message)
	{!! $message !!}
	@endforeach
</div>
@endif



<div class="form-group">
	
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      {!! Form::submit('Guardar', ["class" => "btn btn-success"]) !!}
    </div>
  </div>

{!! Form::close() !!}

