<?php

	$errores = '';
	$enviado = '';
	if (isset($_POST['submit'])) {

		$nombre  = $_POST['nombre'];
		$correo  = $_POST['correo'];
		$mensaje = $_POST['mensaje'];

		if(!empty($nombre)){
			$nombre = trim($nombre);
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		} else{
			$errores .= ' porfavor ingresa  un nombre valido <br/>';
		}


		if (!empty($correo)) {

			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);


			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= ' porfavor ingresa un correo valido <br/>';
			
		}
	}else{
			$errores .= ' porfavor ingresa un correo <br/>';
		}
			
		if (!empty($mensaje)) {
		
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripcslashes($mensaje);
		}else{
			$errores .= 'porfavor ingresa el mensaje<br/>';
		}
		//enviar correo
		if (!$errores) {
			$enviar_a = 'fredo_y@hotmail.com';
			$asunto = 'correo enviado desde mi set';
			$mensaje_preparado = "DE: $nombre <br/>";
			$mensaje_preparado .= "Correo: $correo <br>";
			$mensaje_preparado .= "mensaje: " . $mensaje;

			//mail($enviar_a, $asunto, $mensaje_preparado);
			$enviado = 'true'; 

		}
	}

 require 'index.view.php';
?>