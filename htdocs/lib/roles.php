<?php

function		get_roles($db)
{
	try {
		$query = "SELECT * FROM role";
		$roles = $db->query($query);
	}
	catch(PDOException $e) {
		echo $e->getMessage() . PHP_EOL;
	}
	return ($roles);
}

?>
