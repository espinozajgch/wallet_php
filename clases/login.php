<?php require_once('../conexion/connection.php');
  require 'clientes.php';

	if (!isset($_SESSION)) {
	session_start();
	}

	$bd = connection::getInstance()->getDb();

if(!isset($_SESSION['estado'])){

	if (isset($_REQUEST['signin-email'])) {
		$email = $_REQUEST['signin-email'];  
		$password = $_REQUEST['signin-password'];

		if($email != "" && $password != ""){

			$login_usuario = Clientes::login_usuario($bd, $email, $password);

			if ($login_usuario) {
				// Código de éxito
				//print_r($login_usuario);
				$datos["login"] = $login_usuario;

				$idusuario = $datos["login"]["id_usuario"];
				$usuario = $datos["login"]["nombre"];

				$_SESSION['usuario'] = $usuario;
				$_SESSION['idusuario'] = $idusuario;
				$_SESSION['estado'] = "autenticado";  

				echo json_encode(
				array(
				    'estado' => '1',
				    'mensaje' => '<strong>Bienvenido, sera dirigido a su cuenta</strong>'
				));
			}
			else{
				echo json_encode(
				array(
				    'estado' => '0',
				    'mensaje' => '<strong>Combinacion usuario/password invalida</strong>'
				));
			} 
		}
		else{
			echo json_encode(
				array(
				'estado' => '-1',
				'mensaje' => '<strong>Debe ingresar todos los datos en el formulario</strong>'
				), JSON_FORCE_OBJECT); 	
		}

	}
	else{
		echo json_encode(
			array(
			'estado' => '-1',
			'mensaje' => '<strong>Debe ingresar todos los datos en el formulario</strong>'
			), JSON_FORCE_OBJECT); 	
	} 	
}
else{
	echo json_encode(
		array(
		'estado' => '2',
		'mensaje' => '<strong>Existe una sesion activa en estos momentos</strong>'
		), JSON_FORCE_OBJECT); 	
}  
?>