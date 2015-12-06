<div class="form-group">
	<label for="{{{ isset($name) ? $name : ''}}}" class="col-lg-2 control-label">{{{ isset($label) ? $label : ''}}}</label>
	<div class="col-lg-5">
		<?php 
		$options=array();
		$options['class']="form-control";
		$options["placeholder"] = "Escoja";
		$options['data-rel']="chosen";
		if(isset($id)) $options['id']=$id;
		if(isset($multiple)) $options[]=$multiple;
		?>
		{!! Form::select($name, $values,null,$options) !!}
		
	</div>
</div>