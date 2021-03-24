<?php

/* Programa: database.php Se encarga de realizar la conexion a la bd.
   Fecha: 23/03/2021
   Programador ali.cruz@me.com   
*/
class Database
{
	private $dbServer = '';
	private $dbUser = '';
	private $dbPassword = '';
	private $db = '';
	private $dbPort = '';

	// Se inicializan variables de conexion.
	function __construct($dbServer, $dbUser, $dbPassword, $db, $dbPort)
	{
		$this->dbServer = $dbServer;
		$this->dbUser = $dbUser;
		$this->dbPassword = $dbPassword;
		$this->db = $db;
		$this->dbPort = $dbPort;
	}

	// Realizo conexion a la bd.
	function connectToDB()
	{
		$linkToDB;

		try {
			$connectDB = new mysqli(
				$this->dbServer,
				$this->dbUser,
				$this->dbPassword,
				$this->db);

			// Se definen codificacion a usar en la conexion a la bd
			$connectDB->set_charset('UTF8');

			$linkToDB = $connectDB;
		} catch (mysqli_sql_exception $err) {
			throw $err;
		}


	}

}


?>