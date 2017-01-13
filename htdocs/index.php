<?php include('header.php') ?>
<?php include('lib/db_connect.php') ?>
<?php include('lib/roles.php') ?>

<?php
	$db = db_connect();
	$roles = get_roles($db);
?>

<div class="container">
	<h1>Présentation EPAC <br> <div id=soustitre>Equipe de Pilotage de l'Amélioration Continue</div></h1>
	<p> Ce site a pour vocation de traiter et d'afficher les résultats de l'EPAC afin de suivre la qualité sur le centre de service de Clichy </p>
	<p> Liste des activités de l'EPAC : </p>
	<?php
		while ($role = $roles->fetch())
			echo "<h3>" . $role['id_role'] . " : " . $role['nomrole'] . "</h3>\n";
	?>
    <div id=presentationEPAC>
	<li> <a href="qualité.html">Qualité</a> </li>
	<li> <a href="projet.html">Projet</a>  </li>
	<li> <a href="formation&Intégration.html">Formation & Intégration</a> </li>
	<li> <a href="outillage.html">Outillage</a> </li>
    </div>
</div>

</body></html>
