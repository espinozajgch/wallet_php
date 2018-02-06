<?php
	class Clientes{

		/*clase que contiene todas las funciones relacionadas a las consultas de la informacion de los clientes*/

		function __construct(){

		}


		/**
		realiza la validacion de los datos del usuario
		*/

		public static function login_usuario($bd, $email, $password){
						
			$consulta = "SELECT id_usuario, nombre FROM usuarios WHERE email=? AND password=?";

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($email,$password));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){		                        
					return $row;								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION LOGIN USUARIO

		public static function verificar_email($bd, $email){
			
			$consulta = "SELECT email FROM usuarios WHERE email=?";
			

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($email));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return true;								
	            }
	             else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION LOGIN USUARIO

		public static function obtener_identificacion($bd, $idusuario){
			
			$consulta = "SELECT identificacion FROM tblusuarios WHERE idusuario=?";
			

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($idusuario));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return $row["identificacion"];								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_NOMBRE_USUARIO


		public static function obtener_nombre_usuario($bd, $idusuario){
			
			$consulta = "SELECT strnombre FROM tblusuarios WHERE idusuario=?";
			

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($idusuario));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return $row["strnombre"];								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_NOMBRE_USUARIO

		public static function obtener_email_usuario($bd, $idusuario){
			
			$consulta = "SELECT stremail FROM tblusuarios WHERE idusuario=?";
			

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($idusuario));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return $row["stremail"];								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_NOMBRE_USUARIO

		public static function obtener_telefono_usuario($bd, $idusuario){
			
			$consulta = "SELECT strtelefono FROM tblusuarios WHERE idusuario=?";
			
			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($idusuario));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return $row["strtelefono"];								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_NOMBRE_USUARIO


		public static function obtener_imagen_usuario($bd, $idusuario){
			
			$consulta = "SELECT strimagen FROM tblusuarios WHERE idusuario=?";
			
			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($idusuario));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return $row["strimagen"];								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_NOMBRE_USUARIO


		public static function obtener_usuario_by_email($bd, $email){
			
			$consulta = "SELECT strnombre, strapellido FROM tblusuarios WHERE stremail=?";
			

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($email));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return $row["strnombre"] . " " . $row["strapellido"];								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_NOMBRE_USUARIO


		public static function obtener_pass_by_email($bd, $email){
			
			$consulta = "SELECT strpassword FROM tblusuarios WHERE stremail=?";
			

			try {
	            $comando = $bd->prepare($consulta);
	    
	            $comando->execute(array($email));
	            $row = $comando->fetch(PDO::FETCH_ASSOC);
	    	            
	            if($row){	                        
					return $row["strpassword"] ;								
	            }
	            else{
	            	return false;
	            }
	    
	        } catch (Exception $e) {
	            echo $e;
	            return false;
	        }
		} //FIN FUNCION OBTENER_NOMBRE_USUARIO


		public static function insert_user($bd, $nombre, $email, $pass, $guid, $address, $label, $link, $saldo)
	    {
	        // Sentencia INSERT
	        $consulta = "INSERT INTO usuarios ( " .
	            " nombre," .
	            " email," .
	            " password," .
	            " guid," .
	            " address," .
	            " label," .
	            " link," .
	            " saldo)" .
	            " VALUES(?,?,?,?,?,?,?,?)";

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($nombre, $email, $pass, $guid, $address, $label, $link, $saldo));
		        

		        if($resultado){
		        	return true;
			        /*
			        $consulta = "SELECT MAX(id_usuario) AS id FROM usuarios";
			        $comando = $bd->prepare($consulta);
			        $comando->execute();
			        $row = $comando->fetch(PDO::FETCH_ASSOC);

	        		if($row){	                		                
		                $id = $row['id'];
		                //insert_address($bd, $id, $address, 1);
		                if(Clientes::insert_address($bd, $id, $address, 1)){	                		                
		                	return true;
	            		}

	            	}
	            	return false;*/	            	
		        }

		        return false;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            echo $e;
	            return null;
	        } /**/	
	    }

	    public static function insert_address($bd, $id_usuario, $address, $principal)
	    {
	        // Sentencia INSERT
	        $consulta = "INSERT INTO direcciones ( " .
	            " id_usuario," .
	            " direccion," .
	            " principal)" .
	            " VALUES(?,?,?)";

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($id_usuario, $address, $principal));
		        

		        if($resultado){
	            	return $id_usuario;	            	
		        }

		        return false;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            echo $e;
	            return null;
	        } 	
	    }


	    public static function editar_perfil($bd, $id_usuario, $nombre, $email, $telefono, $strimagen)
	    {
	    	// Sentencia INSERT
	        $consulta = "UPDATE tblusuarios SET strnombre = '". $nombre ."',
	           	stremail = '" . $email . "',
	            strtelefono = '" . $telefono . "', 
	            strimagen = '" . $strimagen . "' 
            	WHERE idusuario = ". $id_usuario;
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute();
		        

		        if($resultado){

			        return 1   ;       	
		        }

		        return 0;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
	    	

	    }


	    public static function cambiar_pass($bd, $id_usuario, $pass)
	    {
	    	// Sentencia INSERT
	        $consulta = "UPDATE tblusuarios SET strpassword = '". $pass ."'
            	WHERE idusuario = ". $id_usuario;
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute();
		        

		        if($resultado){

			        return 1   ;       	
		        }

		        return 0;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
	    	

	    }


	    public static function agregar_direccion($bd, $idusuario, $cedula , $nombre ,$direccion, $estado, $ciudad ,$pais, $tlf_fijo, $tlf_movil, $id_tipo)
	    {
	        // Sentencia INSERT
	        $consulta = "INSERT INTO tbldireccion ( " .
	        	" cedula," .
	        	" nombre," .
	            " str_direccion," .
	            " str_estado,".
	            " str_ciudad," .
	            " str_pais," .
	            " tlf_fijo," .
	            " tlf_movil," .
	            " id_tipo," .
	            " id_usuario)" .
	            " VALUES(?,?,?,?,?,?,?,?,?,?)";
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute(array($cedula , $nombre, $direccion, $estado, $ciudad, $pais, $tlf_fijo, $tlf_movil, $id_tipo ,$idusuario));
		        

		        if($resultado){

			        return $resultado;       	
		        }

		        return $resultado;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
	    }

	    public static function editar_direccion($bd, $id_direccion, $cedula , $nombre ,$direccion, $estado, $ciudad ,$pais, $tlf_fijo, $tlf_movil, $id_tipo)
	    {
	        // Sentencia INSERT
	        $consulta = "UPDATE tbldireccion SET cedula = '" . $cedula . "', nombre= '" . $nombre . "',
	        	  str_direccion= '" . $direccion . "', str_estado= '" . $estado . "', str_ciudad= '" . $ciudad . "',
	        	  str_pais= '" . $pais . "', tlf_fijo= '" . $tlf_fijo . "', tlf_movil= '" . $tlf_movil . "', id_tipo= '" . $id_tipo . "' 
	        	  WHERE id_direccion = ". $id_direccion;
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute();
		        

		        if($resultado){
			        return $resultado;       	
		        }

		        return $resultado;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
	    }


	    public static function eliminar_direccion($bd, $id_direccion)
	    {
	    	// Sentencia INSERT
	        $consulta = "DELETE FROM tbldireccion WHERE id_direccion = ". $id_direccion;
	            

	       try {
		        // Preparar la sentencia
		        $comando = $bd->prepare($consulta);
		        $resultado = $comando->execute();
		        

		        if($resultado){

			        return 1;       	
		        }

		        return 0;

	        } catch (PDOException $e) {
	            // Aquí puedes clasificar el error dependiendo de la excepción
	            // para presentarlo en la respuesta Json
	            //echo $e;
	            return $e;
	        }
	    	

	    }


	   

}
?>