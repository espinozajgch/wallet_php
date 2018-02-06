<?php 
  	require_once('../conexion/connection.php');
  	require 'clientes.php';
  	require 'master.php';

  	$bd = connection::getInstance()->getDb();

  	if (isset($_REQUEST['signup_name']) && isset($_REQUEST['signup_email']) && isset($_REQUEST['signup_password'])) {

    	$email = $_REQUEST['signup_email'];
    	$nombre = $_REQUEST['signup_name'];
    	$password = $_REQUEST['signup_password'];
    
	   	if(($email != "") && ($nombre != "") && ($password != "")){
	      	$guid = "abe1ff27-2720-40a0-8e57-5b664eb3c9f5";
	      	$address = "1TCeyVpYGQffkbCz8SydLUDwrpud5mnUq";
	      	$label = "";
	      	$link = "";
	      	$saldo = 0;

	        //$blockchain = Master:: create($email, $password)
	        $resultado = Clientes:: insert_user($bd, $nombre, $email, $password, $guid, $address, $label, $link, $saldo);

	        	if($resultado){
	          		print json_encode(
	            		array(
	                	'estado' => '1',
	                	'mensaje' => '<strong>Registro Exitoso, ya puedes iniciar sesion</strong>'
	            		));/**/
	          	}
	          	else{
	          		//Enviar respuesta de error
		        	print json_encode(
		            	array(
		                	'estado' => '0',
		                	'mensaje' => 'Ocurrio un error durante el registro'
		            ));
	          	}    	
	    }
	}
	else{
		echo json_encode(
	  	array(
	      'estado' => '-1',
	      'mensaje' => '<strong>Debe ingresar todos los datos en el formulario</strong>'
	  	), JSON_FORCE_OBJECT); 	
  	}
?>


