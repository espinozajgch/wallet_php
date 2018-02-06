<?php
	if (!isset($_SESSION)) {
  		session_start();
  	}

    $_SESSION['usuario'] = "";
    $_SESSION['estado'] = "";

	unset ($_SESSION['usuario']);
	unset ($_SESSION['estado']);

		if(isset($_SESSION['idusuario'])){
			$_SESSION['idusuario'] = "";
			unset ($_SESSION['idusuario']);
		}

    	session_destroy();
		header('Location: ../index.php');	
?>