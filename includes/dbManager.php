<?php
	require_once('database.php');

	// Instancia conexion a la bd
	$database = new Database('localhost', 'root', '', 'mitsuaki', '3306');

	$linkToDB = $database->connectToDB();
	

?>
