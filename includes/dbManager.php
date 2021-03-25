<?php
	// Silencias errores rebeladores.
	error_reporting(0);

	require_once('database.php');

	// Instancia conexion a la bd
	$database = new Database('localhost', 'root', '', 'bd_compras');
	
	try {
		$linkToDB = $database->connectToDB();		
		
		// Valido la respuesta del intento de conexion. null = sin exito.		
		// si mysqli_connect_errno() es cero entonces no hay errores. Numero diferente a 0 = error.
		// si mysqli_connect_errno es 0, if lo evalua como falso.
		if (mysqli_connect_errno()) {
			throw new Exception("Error al intentar conectarme a la BD.");			
		} else {
			echo "Conexion correcta";
		}

	} catch (Exception $e) {
		echo "Error de conexion: " . $e->getMessage();
	}
?>