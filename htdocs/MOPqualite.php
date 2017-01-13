<?php include('header.php') ?>

<div class="container">
  <h1> Demande d'une mise au point qualité avec un collaborateur </h1>
</div>

<div id=formulaire_mop_qualite>
  <form method="post" action="traitement_MOP_qualite.php">
   <p><label>Nom du collaborateur : </label><br><input type="text" name="nom_collab" size="50" style="height:25px;"/></p>
   <p><label>Prénom du collaborateur : </label><br><input type="text" name="prenom_collab" size="50" style="height:25px;"/></p>
   <p><label>Client : </label><br><input type="text" name="client_collab" size="50" style="height:25px;"/></p>
   <p><label>Commentaire : </label><br><textarea name="commentaire" rows="10" cols="50"></textarea></p>
   <input type="submit" value="Envoyer"/>
  </form>
</div>
