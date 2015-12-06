

<div class="form-group">
	<label for="{{{ isset($name) ? $name : ''}}}" class="col-lg-2 control-label">{{{ isset($label) ? $label : ''}}}</label>
	<div class="col-lg-5">

		<?php 
$options=["class" => "form-control",'placeholder'=>''];
if(isset($opciones)){
	foreach ($opciones as $key => $val) {
		$options[$key]=$val;
	}
}

		 ?>
{!! Form::text($name, isset($value) ? $value : null, $options) !!}

	</div>
</div>

