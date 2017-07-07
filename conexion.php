<?php
		$conexion = new MySQLi("localhost", "root","", "vinoteca");
		if ($conexion-> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $conexion-> mysqli_connect_errno() 
				. ") " . $conexion-> mysqli_connect_error());
		}
?>