<?php

try {
		$conexion = new PDO('mysql:host=localhost:8080;dbname=prueba2','root', '');
		echo "Conexion OK";
	} catch (PDOException $e) {
		echo "error:" . $e->getMessage();
		
	}	

?>