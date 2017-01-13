<?php include('header.php') ?>

<div class="container">
  <h1> Demande de mouvement collaborateur </h1>
</div>

<div id=formulaire_mouvement_collab>
  <form method="post" action="traitement_mouvement_collab.php">
   <p><label>Nom du collaborateur : </label><br><input type="text" name="nom_collab" size="50" style="height:25px;"/></p>
   <p><label>Prénom du collaborateur : </label><br><input type="text" name="prenom_collab" size="50" style="height:25px;"/></p>
   <p><label>Client initial : </label><br><input type="text" name="clientOut_collab" size="50" style="height:25px;"/></p>
   <p><label>Client final : </label><br><input type="text" name="clientIn_collab" size="50" style="height:25px;"/></p>
   <p><label>Commentaire : </label><br><textarea name="commentaire" rows="10" cols="50"></textarea></p>
   <input type="submit" value="Envoyer"/>
  </form>
</div>
