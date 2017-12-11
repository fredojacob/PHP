<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Kreon" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
			<input type="text" class="form-control" id="correo" name="correo" placeholder="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
			<textarea type="text" name="mensaje" class="form-control" id="mensaje" placeholder="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
			
			<?php  if (!empty($errores)): ?>

				<div class="alert error">
					<?php echo $errores; ?>
				</div>
				<?php elseif ($enviado):?>

				<div class="alert sucess">	
					<p> enviado correctamete</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="enviar correo">		
		</form>
	</div>
	
</body>
</html>