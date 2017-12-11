<?php

	$errores ='';
	if(isset($_POST['submit'])){ // setea es como una revision si se setea cuando se haga submit realiza la siguiente funcion

		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];

		if (!empty($nombre)){ // empty = sino esta vacio
			//$nombre = trim($nombre);//quita los espacios al inica al final
			//$nombre = htmlspecialchars($nombre); //convierte caracteres en entidades html
			//$nombre = stripslashes($nombre);// remueve los simbolos como las diagonales para que el usuario no inyecte codigo


					$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);// remueve los signos 
					echo "tu nombres es: $nombre <br />";

		} else{
			$errores .= 'porfavor agrega un nombre';
		}

			if (!empty($correo)) {
					$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
					if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

						$errores .= 'porfavor agrega un correo valido <br/>';
					}else{

							
							echo "tu nombres es: $correo";						
					}


		
			}else
			{
				$errores .= '<br/ >porfavor agrega con correo ';
			}

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Practica PhP</title>
	<style>
		.error{color:purple;}
	</style>
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> 
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="correo" placeholder="correo">

			<?php if(!empty($errores)): // sino esta vacio la variable errores?> 
			
			<div class="error"><?php echo $errores ;?></div>


			<?php endif; ?>




		<input type="submit" name="submit">

	</form>
	
</body>
</html>