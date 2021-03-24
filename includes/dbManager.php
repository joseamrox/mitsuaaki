<?php
	require_once('database.php');

	// Instancia conexion a la bd
	$database = new Database('localhost', 'root', 'fR5$55d_tu8w', 'mitsuaki', '3306');

	$linkToDB = $database->connectToDB();
	

?>