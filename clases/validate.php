<?php 
  require_once('../conexion/connection.php');
  require 'clientes.php';
  require 'master.php';

  $bd = connection::getInstance()->getDb();

  if (isset($_REQUEST['signup_email'])) {
    $email = $_REQUEST['signup_email'];
    
    if(($email != "")){
        if(Clientes::verificar_email($bd,$email)){
            echo json_encode(
            array(
                'estado' => '0',
                'mensaje' => 'Email Registrado'
            ));
        }
        else{
          	echo json_encode(
            	array(
                'estado' => '1',
                'mensaje' => 'Email Disponible'
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


