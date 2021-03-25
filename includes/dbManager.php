<?php
	// Silencias errores rebeladores.
	error_reporting(0);

	require_once('database.php');

	// Instancia conexion a la bd
<<<<<<< HEAD
	$database = new Database('localhost', 'root', '', 'bd_compras');
=======
	$database = new Database('localhost', 'root', '', '', '3306');

	$linkToDB = $database->connectToDB();
>>>>>>> 94b6e7ed0140f18443bd142837f7b3be91f36d52
	
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

<<<<<<< HEAD
	} catch (Exception $e) {
		echo "Error de conexion: " . $e->getMessage();
	}
?>
=======
?>
>>>>>>> 94b6e7ed0140f18443bd142837f7b3be91f36d52
