<?php
session_start();
	/* DATABASE CONFIGURATION */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root@localhost');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'test');
	define("BASE_URL", "http://localhost/KIM_Board/LOGINA/"); // Eg. http://yourwebsite.com


function getDB() 
{
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	try {
		$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$dbConnection->exec("set names utf8");
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConnection;
	}
	
	catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}

}
?>