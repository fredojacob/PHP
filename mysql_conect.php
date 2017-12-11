<?php

	$conexion = mysql_connect('localhost', 'root', '') or die('no se pudo conectar');
	mysql_select_db('prueba', $conexion);
	$resultados = mysql_query('SELECT * FROM datos');
	echo $resultados;

?>