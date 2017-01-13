<?php

function	db_create($linux)
{
	$servername = "127.0.0.1";
	$username = "root";
	$password = "123456";
	$dbname = "epac";

	if ($linux)
		$port = "3307";
	else
		$port = "3306";

	$db = new PDO("mysql:host=$servername;port=$port", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$query = "DROP DATABASE IF EXISTS $dbname";
		$db->exec($query);
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

	try {
		$query = "CREATE DATABASE $dbname";
		$db->exec($query);
		echo "DB epac created successfully" . PHP_EOL;
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

	$db = null;
}

?>
