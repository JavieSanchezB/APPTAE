

<div class="form-group">
	<label for="{{{ isset($name) ? $name : ''}}}" class="col-lg-2 control-label">{{{ isset($label) ? $label : ''}}}</label>
	<div class="col-lg-5">
{!! Form::input('number', $name, isset($value) ? $value : null, ["class" => "form-control",'placeholder'=>$label]); !!}
	</div>
</div>

