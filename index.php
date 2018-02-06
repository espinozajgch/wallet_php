<?php
require_once('conexion/connection.php');
 
$bd = connection::getInstance()->getDb();

if (!isset($_SESSION)) {
  		session_start();
  	}

	//Comprobamos si la sesión está iniciada
	//Si existe una sesión correcta, mostramos la página para los usuarios
	//Sino, mostramos la página de acceso y registro de usuarios
    	if(isset($_SESSION['idusuario'])){
    		header ("Location: dashboard/");
    	}
?>
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Tu Billetera</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="assets/css/css.css" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
			<div id="alertas" name="alertas"></div>
				<div class="auth-box ">

					<div class="left">
						<div class="overlay"></div>
						<div class="content text">
							<div class="header">
								<!--div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div-->
								<p class="lead">Ingresa</p>
							</div>
							<form class="form-auth-small" onSubmit="return false;" id="sesion" name="sesion">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="signin-email" name="signin-email" value="" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="signin-password" value="" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Recuerdame</span>
									</label>
								</div>
								<button class="btn btn-primary btn-lg btn-block" onclick="iniciar_sesion();">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<div class="header">
								
								<p class="lead">Crea tu cuenta</p>
							</div>
							<form class="form-auth-small" onSubmit="return false;" id="registrar" name="registrar">
								<!--div class="form-group">
									<label for="signin-email" class="control-label sr-only">Identificacion</label>
									<input type="" class="form-control" id="signin-id" name="signup-id" placeholder="Indentificacion" value="18573577">
								</div-->
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Nombre</label>
									<input type="name" class="form-control" id="signup-name" name="signup-name" placeholder="Nombre" value="">
								</div>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="Email" value="">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="Password" value="">
								</div>
								
								<button onclick="validar_usuario();" class="btn btn-primary btn-lg btn-block">REGISTRAR</button>
								<div class="bottom">
									<!--span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span-->
									
								</div>
								
							</form>
							
						</div>
					</div>
					<div class="clearfix"></div>
						
				</div>
				
			</div>

		</div>
	</div>
	<!-- END WRAPPER -->
	 	<script src="assets/vendor/jquery/jquery.min.js"></script>
	    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

	    <!-- Plugin JavaScript >
	    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script-->
	    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/vendor/toastr/toastr.min.js"></script>
		<script src="assets/scripts/klorofil-common.js"></script>
	    <script src='assets/vendor/ajax_index.js'></script>
</body>

</html>
