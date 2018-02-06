function objetoAjax(){
        var xmlhttp=false;
        try {
               xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
               try {
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
               } catch (E) {
                       xmlhttp = false;
               }
        }
 
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
               xmlhttp = new XMLHttpRequest();

        }

        return xmlhttp;

}

var alertar = '<div class="alert alert-danger" id="alertard" name="alertard" ></div>'; 

var alertaw = '<div class="alert alert-warning" id="alertawd" name="alertawd" ></div>'; 

var cerrar  = '<button class="close" data-dismiss="alert"><span>&times;</span></button>'; 

var alertav = '<div class="alert alert-success" id="alertavd" name="alertavd" ></div>';  

function mostrar_consulta(datos){

        //alert("Usuario no encontrado" + datos);
        //document.getElementById("cuerpo").style.visibility="visible";
        divResultado = document.getElementById('contenedor');

        ajax=objetoAjax();

        ajax.open("GET", datos);

        ajax.onreadystatechange=function() {

               if (ajax.readyState==4) {

                       divResultado.innerHTML = ajax.responseText

               }

        }

        ajax.send(null)
/**/
}

function validar_usuario(){
	var signup_name = $('#signup-name').val();
	var signup_email = $('#signup-email').val();
	var signup_password = $('#signup-password').val();

	$.ajax({
	type: 'POST',
	url: "clases/validate.php",
	data: { signup_email : signup_email},
		// Mostramos un mensaje con la respuesta de PHP
		success: function(data) 
		{   
			var resultado = JSON.parse(data);
			if(resultado.estado == 0)
			{   
			    $('#alertas').html(alertaw);
			    $('#alertawd').html(cerrar + resultado.mensaje);           
			    $('#alertawd').fadeIn("normal");              
			}
			else
			if(resultado.estado == 1)
			{     
			  	registro_usuario(signup_name, signup_email, signup_password);
			}
			else
			{   
			    $('#alertas').html(alertar);
			    $('#alertard').html(cerrar + resultado.mensaje);          
			    $('#alertard').fadeIn("normal");            
			}      
		},
		error: function(data) { // 500 Status Header
		   	$('#alertas').html(alertaw);
		   	$('#alertawd').html(cerrar + data);           
		   	$('#alertawd').fadeIn("normal");   
		}
	});	
}

function registro_usuario(signup_name, signup_email, signup_password){

	$.ajax({
	type: 'POST',
	url: "clases/register.php",
	data: {signup_name : signup_name, signup_email : signup_email, signup_password : signup_password},
		// Mostramos un mensaje con la respuesta de PHP
		success: function(data) 
		{
			var resultado = JSON.parse(data);
			if(resultado.estado == 0)
			{   
			    $('#alertas').html(alertaw);
			    $('#alertawd').html(cerrar + resultado.mensaje);           
			    $('#alertawd').fadeIn("normal");              
			}
			else
			if(resultado.estado == 1)
			{         
			    $('#alertas').html(alertav);
			    $('#alertavd').html(cerrar + resultado.mensaje);           
			    $('#alertavd').fadeIn("normal");
			    document.getElementById("registrar").reset();            
			}
			else
			{   
			    $('#alertas').html(alertar);
			    $('#alertard').html(cerrar + resultado.mensaje);          
			    $('#alertard').fadeIn("normal");            
			}       
		},
		error: function(data) { // 500 Status Header
			$('#alertas').html(alertaw);
	       	$('#alertawd').html(cerrar + data);           
	       	$('#alertawd').fadeIn("normal");    
			   
		}	
	});          
}

function iniciar_sesion(){
        
	$.ajax({
	type: "POST",
	url: "clases/login.php",
	data: $("#sesion").serialize(),  
	success: function(data){
		// Mostramos un mensaje con la respuesta de PHP
		var resultado = JSON.parse(data);
		if(resultado.estado == 0){
			var contenido = '<strong>Combinacion usuario/password invalida</strong> ';
			$('#alertas').html(alertar);
			$('#alertard').html(cerrar + contenido);  
			$("#alertard").show();
			$("#alertard").delay(1000).hide(600);   
		}
		else
		if(resultado.estado == 1){ 
			var contenido = '<strong>Bienvenido, sera dirigido a su cuenta</strong> ';
			$('#alertas').html(alertav);
			$('#alertavd').html(cerrar + contenido);  
			$("#alertavd").show();
			$("#alertavd").delay(1000).hide(600);    
			setTimeout("location.href='dashboard/index.php'", 700);          
		}
		else
		if(resultado.estado == 2){ 
			var contenido = '<strong>Existe una sesion activa en estos momentos</strong> ';
			$('#alertas').html(alertar);
			$('#alertard').html(cerrar + contenido);  
			$("#alertavd").show();
			$("#alertavd").delay(1000).hide(600);   
		}
		else
		{   
			var contenido = '<strong>Debe ingresar todos los datos en el formulario</strong> ';
			$('#alertas').html(alertar);
			$('#alertard').html(cerrar + contenido);          
			$('#alertard').fadeIn("normal");             
		}  

		},
		error: function(data) { // 500 Status Header
			$('#alertas').html(alertaw);
			$('#alertawd').html(cerrar + data);           
			$('#alertawd').fadeIn("normal");    
		}	
	});     
}

function eliminar_compra(idCompra, id_usuario){
    
    div = document.getElementById('cuerpo');
    url = "../compras/eliminar_compra.php";
       
    $.ajax({
        type: "POST",
        url: url,
        data: {idCompra : idCompra, id_usuario : id_usuario},
        success: function(data){
          div.innerHTML = data;
        }
    });/**/
        
}

