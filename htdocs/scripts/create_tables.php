<?php

function		create_tables($db)
{

//********************* table user *************************
	try {
		$query = "CREATE TABLE user (
			id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			matricule INT(4) NOT NULL UNIQUE,
			nomcomplet VARCHAR(255) NOT NULL,
			motdepasse VARCHAR(255) NOT NULL DEFAULT '12345',
			id_role INT(6) NOT NULL DEFAULT 3,
			email VARCHAR(255) NOT NULL UNIQUE,
			id_client1 INT(6) NOT NULL,
			id_client2 INT(6),
			id_client3 INT(6),
			id_client4 INT(6),
			id_client5 INT(6))";
		$db->exec($query);
		echo "user table created successfully" . PHP_EOL;
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

//********************* table doubleecoute *************************
	try {
		$query = "CREATE TABLE doubleecoute (
			id_doubleecoute INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			noteaccueil INT(6),
			commentaireaccueil TEXT,
			noteidentification FLOAT(5, 2),
			commentaireidentification TEXT,
			notequalification FLOAT(5, 2),
			commentairequalification TEXT,
			notetraitement FLOAT(5, 2),
			commentairetraitement TEXT,
			noteconclusion FLOAT(5, 2),
			commentaireconclusion TEXT,
			notecommunication FLOAT(5, 2),
			commentairecommunication TEXT,
			noteglobale FLOAT(5, 2) NOT NULL,
			datedoubleecoute date NOT NULL,
			duree TIME NOT NULL,
			id_client INT(6) NOT NULL,
			id_collab INT(6) NOT NULL,
			id_auditeur INT(6) NOT NULL,
			resume TEXT)";
		$db->exec($query);
		echo "doubleecoute table created successfully" . PHP_EOL;
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

//********************* table picking *************************
	try {
		$query = "CREATE TABLE picking (
			id_picking INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			id_critere1 INT(6),
			id_critere2 INT(6),
			id_critere3 INT(6),
			id_critere4 INT(6),
			id_critere5 INT(6),
			commentairepicking TEXT,
			notepicking FLOAT(5, 2) NOT NULL,
			datepicking date NOT NULL,
			id_client INT(6) NOT NULL,
			id_collaborateur INT(6) NOT NULL,
			id_auditeur INT(6) NOT NULL,
			conformite ENUM('TRUE', 'FALSE') NOT NULL,
			numeroincident VARCHAR(255) NOT NULL)";
		$db->exec($query);
		echo "picking table created successfully" . PHP_EOL;
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

//********************* table role *************************
	try {
		$query = "CREATE TABLE role (
			id_role INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nomrole VARCHAR(255) NOT NULL UNIQUE)";
		$db->exec($query);
		echo "role table created successfully" . PHP_EOL;
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

//********************* table client *************************
	try {
		$query = "CREATE TABLE client (
			id_client INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nomclient VARCHAR(255) NOT NULL UNIQUE)";
		$db->exec($query);
		echo "client table created successfully" . PHP_EOL;
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

//********************* table critere *************************
	try {
		$query = "CREATE TABLE critere (
			id_critere INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nomcritere VARCHAR(255) NOT NULL UNIQUE,
			poids INT(1) NOT NULL,
			description TEXT,
			id_client INT(6) NOT NULL)";
		$db->exec($query);
		echo "critere table created successfully" . PHP_EOL;
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}

}

?>
