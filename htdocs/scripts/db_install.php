<?php

if ($argc == 2 && $argv[1] == "linux")
{
	$linux = TRUE;
	include('lib/db_connect.php');
	include('db_create.php');
	include('create_tables.php');
	include('insert_tables.php');
}
else
{
	$linux = NULL;
	include('C:\Bitnami\wampstack-7.0.13-1\apps\portail_epac\htdocs\lib\db_connect.php');
	include('C:\Bitnami\wampstack-7.0.13-1\apps\portail_epac\htdocs\scripts\db_create.php');
	include('C:\Bitnami\wampstack-7.0.13-1\apps\portail_epac\htdocs\scripts\create_tables.php');
	include('C:\Bitnami\wampstack-7.0.13-1\apps\portail_epac\htdocs\scripts\insert_tables.php');
}

db_create($linux);
$db = db_connect();
create_tables($db);
insert_tables($db, $linux);

?>
