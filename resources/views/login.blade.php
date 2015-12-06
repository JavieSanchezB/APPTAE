<!DOCTYPE html>
<html lang="en">
<head>
 
<meta charset="utf-8">
<title>@yield('title', 'Iniciar Sesión')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<link href="{{asset('css/bootstrap-cerulean.min.css')}}" rel="stylesheet" />
<link href="{{asset('css/charisma-app.css')}}" rel="stylesheet">
<link href="{{asset('bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet">
<link href="{{asset('bower_components/fullcalendar/dist/fullcalendar.print.css')}}" rel="stylesheet">
<link href="{{asset('bower_components/chosen/chosen.min.css')}}" rel="stylesheet">
<link href="{{asset('bower_components/colorbox/example3/colorbox.css')}}" rel="stylesheet">
<link href="{{asset('bower_components/responsive-tables/responsive-tables.css')}}" rel="stylesheet">
<link href="{{asset('bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css')}}" rel="stylesheet">
<link href="{{asset('css/jquery.noty.css')}}" rel="stylesheet">
<link href="{{asset('css/noty_theme_default.css')}}" rel="stylesheet">
<link href="{{asset('css/elfinder.min.css')}}" rel="stylesheet">
<link href="{{asset('css/elfinder.theme.css')}}" rel="stylesheet">
<link href="{{asset('css/jquery.iphone.toggle.css')}}" rel="stylesheet">
<link href="{{asset('css/uploadify.css')}}" rel="stylesheet">
<link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
 
<script src="bower_components/jquery/jquery.min.js"></script>
 
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<div class="ch-container" >
<div class="row">
<div class="col-md-8 login-header">
					
					<picture>
  <source
  
    srcset="img/cecar.png">
  <source
   
    srcset="img/cecar.png">
  <img
    src="img/cecar.png"
    alt="CECAR">
</picture>

</div>
<div class="row">
<div class="col-md-offset-9 login-header">
					
					<picture>
  <source
  
    srcset="img/cecar.png">
  <source
   
    srcset="img/cecar.png">
  <img
    src="img/cecar.png"
    alt="CECAR">
</picture>

</div>
 
</div> 
<div class="row" >


<div class="well col-md-5 center login-box">
@if($errors->has())
<div class='alert alert-danger'>
    @foreach ($errors->all('<p>:message</p>') as $message)
    {!! $message !!}
    @endforeach
</div>
@endif

  <form  class="form-horizontal" method="POST" action="{{url()}}/login">
                            {!! csrf_field() !!}
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>
<div class="input-group input-group-lg">

<span class="input-group-addon"><i class="glyphicon glyphicon-user green"></i></span>
<input type="number" class="form-control" placeholder="Ingrese su usuario" name="username" required>
</div>
<div class="clearfix"></div><br>
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock green"></i></span>
<input type="number" class="form-control" placeholder="Ingrese su contraseña"name="password" required>
</div>

<div class="clearfix"></div>
<div class="input-prepend">
<label class="remember" for="remember"><input type="checkbox" id="remember">Rercordarme</label>
</div>
<div class="clearfix"></div>
<p class="center col-md-5">
<button type="submit" class="btn btn-success" value="Sign in">Iniciar sesión</button>
</p>
</fieldset>
</form>
</div>
 
</div> 
</div> 
</div> 
 
  <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
 
  <script src="{{asset('js/jquery.cookie.js')}}"></script>
 
  <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
 
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
 
  <script src="{{asset('bower_components/chosen/chosen.jquery.min.js')}}"></script>
 
  <script src="{{asset('bower_components/colorbox/jquery.colorbox-min.js')}}"></script>
 
  <script src="{{asset('js/jquery.noty.js')}}"></script>
 
  <script src="{{asset('bower_components/responsive-tables/responsive-tables.js')}}"></script>
 
  <script src="{{asset('bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js')}}"></script>
 
  <script src="{{asset('js/jquery.raty.min.js')}}"></script>
 
  <script src="{{asset('js/jquery.iphone.toggle.js')}}"></script>
 
  <script src="{{asset('js/jquery.autogrow-textarea.js')}}"></script>
 
  <script src="{{asset('js/jquery.uploadify-3.1.min.js')}}"></script>
 
  <script src="{{asset('js/jquery.history.js')}}"></script>
 
  <script src="{{asset('js/charisma.js')}}"></script>
</body>
</html>
