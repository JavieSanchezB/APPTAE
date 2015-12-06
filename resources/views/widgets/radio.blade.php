<div class="form-group">
	<label for="{{{ isset($name) ? $name : ''}}}" class="col-lg-2 control-label">{{{ isset($label) ? $label : ''}}}</label>
	<div class="col-lg-5">
		
		@forelse($values as $k =>$v)
		{!! Form::radio($name,$k,null) !!}{{$v}}<br>
		@endforeach
		
	</div>
</div>