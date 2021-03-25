<?php
	// Silencias errores rebeladores.
	error_reporting(0);

	require_once('database.php');

	// Instancia Database
	$database = new Database('localhost', 'root', '', 'mitsuaki');

	// Conexion a la bd.
	$linkToDB = $database->connectToDB();	
	
	if (validaConnectSQL($linkToDB)) {
		echo "true";
	} else {
		echo "false";
	}

	// Valido si se realizo conexion satisfactoriamente a a bd.
	function validaConnectSQL($linkToDB) 
	{
		// Valido conexion. Si connect_errno es 0 (no hay errores), if (0) = falso.
		if (!$linkToDB->connect_errno) {
			return true;
		} else {
			return false;
		}
	}

?>