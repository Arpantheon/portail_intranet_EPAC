<?php

function		insert_tables($db, $linux)
{
    $fieldseparator = ";";
    $lineseparator = "\r\n";

	if ($linux)
		$path = "/home/valentin/Code/lamp/apps/epac/htdocs/docs/csv/";
	else
		$path = "C:\Bitnami\wampstack-7.0.13-1\apps\portail_epac\htdocs\docs\csv\\";

//********************* table user *************************
    $table = "user";
    $csvfile = $path . 'user.csv';
    if(!file_exists($csvfile))
      die("File not found : $table.csv\nMake sure you specified the correct path.\n");
    $affectedRows = $db->exec
    (
      "LOAD DATA INFILE "
      .$db->quote($csvfile)
      ." INTO TABLE `$table` FIELDS TERMINATED BY "
      .$db->quote($fieldseparator)
      ."LINES TERMINATED BY "
      .$db->quote($lineseparator)
      ."(id_user, matricule, nomcomplet, motdepasse, id_role, email, id_client1, @id_client2, @id_client3, @id_client4, @id_client5)"
      ."SET id_client2 = if(@id_client2='',NULL,@id_client2),"
      ."id_client3 = if(@id_client3='',NULL,@id_client3),"
      ."id_client4 = if(@id_client4='',NULL,@id_client4),"
      ."id_client5 = if(@id_client5='',NULL,@id_client5);"
    );
    echo "Loaded a total of $affectedRows records from $table.csv file.\n";

//********************* table client *************************
    $table = "client";
    $csvfile = $path . 'client.csv';
    if(!file_exists($csvfile))
      die("File not found : $table.csv\nMake sure you specified the correct path.\n");
    $affectedRows = $db->exec
    (
      "LOAD DATA INFILE "
      .$db->quote($csvfile)
      ." INTO TABLE `$table` FIELDS TERMINATED BY "
      .$db->quote($fieldseparator)
      ."LINES TERMINATED BY "
      .$db->quote($lineseparator)
    );
    echo "Loaded a total of $affectedRows records from $table.csv file.\n";

//********************* table role *************************
    $table = "role";
    $csvfile = $path . 'role.csv';
    if(!file_exists($csvfile))
      die("File not found : $table.csv\nMake sure you specified the correct path.\n");
    $affectedRows = $db->exec
    (
      "LOAD DATA INFILE "
      .$db->quote($csvfile)
      ." INTO TABLE `$table` FIELDS TERMINATED BY "
      .$db->quote($fieldseparator)
      ."LINES TERMINATED BY "
      .$db->quote($lineseparator)
    );
    echo "Loaded a total of $affectedRows records from $table.csv file.\n";

//********************* table critere *************************
    $table = "critere";
    $csvfile = $path . 'critere.csv';
    if(!file_exists($csvfile))
      die("File not found : $table.csv\nMake sure you specified the correct path.\n");
    $affectedRows = $db->exec
    (
      "LOAD DATA INFILE "
      .$db->quote($csvfile)
      ." INTO TABLE `$table` FIELDS TERMINATED BY "
      .$db->quote($fieldseparator)
      ."LINES TERMINATED BY "
      .$db->quote($lineseparator)
    );
    echo "Loaded a total of $affectedRows records from $table.csv file.\n";

//********************* table doubleecoute *************************
    $table = "doubleecoute";
    $csvfile = $path . 'double_ecoute.csv';
    if(!file_exists($csvfile))
      die("File not found : $table.csv\nMake sure you specified the correct path.\n");
    $affectedRows = $db->exec
    (
      "LOAD DATA INFILE "
      .$db->quote($csvfile)
      ." INTO TABLE `$table` FIELDS TERMINATED BY "
      .$db->quote($fieldseparator)
      ."LINES TERMINATED BY "
      .$db->quote($lineseparator)
      ."(id_doubleecoute, @noteaccueil, commentaireaccueil, @noteidentification, commentaireidentification, @notequalification, commentairequalification, @notetraitement, commentairetraitement, @noteconclusion, commentaireconclusion,  @notecommunication, commentairecommunication, noteglobale, datedoubleecoute, duree, id_client, id_collab, id_auditeur, resume)"
      ."SET noteaccueil = if(@noteaccueil='',NULL,@noteaccueil),"
      ."noteidentification = if(@noteidentification='',NULL,@noteidentification),"
      ."notequalification = if(@notequalification='',NULL,@notequalification),"
      ."notetraitement = if(@notetraitement='',NULL,@notetraitement),"
      ."noteconclusion = if(@noteconclusion='',NULL,@noteconclusion),"
      ."notecommunication = if(@notecommunication='',NULL,@notecommunication),"
      ."notecommunication = if(@notecommunication='',NULL,@notecommunication);"
    );
    echo "Loaded a total of $affectedRows records from $table.csv file.\n";

    //********************* table user *************************
        $table = "picking";
        $csvfile = $path . 'picking.csv';
        if(!file_exists($csvfile))
          die("File not found : $table.csv\nMake sure you specified the correct path.\n");
        $affectedRows = $db->exec
        (
          "LOAD DATA INFILE "
          .$db->quote($csvfile)
          ." INTO TABLE `$table` FIELDS TERMINATED BY "
          .$db->quote($fieldseparator)
          ."LINES TERMINATED BY "
          .$db->quote($lineseparator)
          ."(id_picking, @id_critere1, @id_critere2, @id_critere3, @id_critere4, @id_critere5, commentairepicking, notepicking, datepicking, id_client, id_collaborateur, id_auditeur, conformite, numeroincident)"
          ."SET id_critere1 = if(@id_critere1='',NULL, @id_critere1),"
          ."id_critere2 = if(@id_critere2='',NULL,@id_critere2),"
          ."id_critere3 = if(@id_critere3='',NULL,@id_critere3),"
          ."id_critere4 = if(@id_critere4='',NULL,@id_critere4),"
          ."id_critere5 = if(@id_critere5='',NULL,@id_critere5);"
        );
        echo "Loaded a total of $affectedRows records from $table.csv file.\n";
}

?>
