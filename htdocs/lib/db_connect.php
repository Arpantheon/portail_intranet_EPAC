<?php

function db_connect()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "123456";
    $dbname = "epac";
	// $port = "3306";
	$port = "3306";

	try {
		$db = new PDO("mysql:host=$servername;port=$port; dbname=$dbname", $username, $password);
    	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}
	return ($db);
}

?>
