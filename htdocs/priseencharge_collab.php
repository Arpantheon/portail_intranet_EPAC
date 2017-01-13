<?php include('header.php') ?>

<div class="container">
	<h1> Demande de prise en charge d'un nouveau collaborateur </h1>
</div>

<div id=formulaire_pec_collab>
  <form method="post" action="traitement_integration.php">
   <p><label>Nom : </label><br><input type="text" name="nom_collab" size="50" style="height:25px;"/></p>
   <p><label>Prénom : </label><br><input type="text" name="prenom_collab" size="50" style="height:25px;"/></p>
   <p><label>Société : </label><br><input type="text" name="societe_collab" size="50" style="height:25px;"/></p>
   <p><label>Date de démarrage : </label><br><input type="date" name="inDate_collab" size="50" style="height:25px;"/></p>
   <p><label>Date de fin de contrat (si prestataire) : </label><br><input type="date" name="outDate_collab" size="50" style="height:25px;"/></p>
   <p><label>Numéro de téléphone : </label><br><input type="tel" name="callnumber_collab" size="50" style="height:25px;"/></p>
   <p><label>Adresse Email : </label><br><input type="email" name="email_collab" size="50" style="height:25px;"/></p>
   <p><label>Client : </label><br><input type="text" name="client_collab" size="50" style="height:25px;"/></p>
   <p><label>Fonction : </label><br><input type="text" name="fonction_collab" size="50" style="height:25px;"/></p>
   <input type="submit" value="Envoyer" />
  </form>
</div>
</body></html>
