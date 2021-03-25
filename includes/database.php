<?php

/* Programa: database.php Se encarga de realizar la conexion a la bd.
   Fecha: 23/03/2021
   Programador ali.cruz@me.com   
*/
class Database
{
	private $dbServer = 'NULL';
	private $dbUser = 'NULL';
	private $dbPassword = 'NULL';
	private $db = 'NULL';


	// Se inicializan variables de conexion.
	function __construct($dbServer, $dbUser, $dbPassword, $db)
	{
		$this->dbServer = $dbServer;
		$this->dbUser = $dbUser;
		$this->dbPassword = $dbPassword;
		$this->db = $db;
	}

	// Realizo conexion a la bd.
	function connectToDB()
	{
					
			$connectDB = new mysqli(
			$this->dbServer,
			$this->dbUser,
			$this->dbPassword,
			$this->db);
			
			// Se definen codificacion a usar en la conexion a la bd
			$connectDB->set_charset('UTF8');
	
	
			return $connectDB;
	}
}
?>