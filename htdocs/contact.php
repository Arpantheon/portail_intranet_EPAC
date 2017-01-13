<?php include('header.php') ?>

<div class="container">
  <h1> Contact </h1>
</div>

<div id=formulaire_contact>
  <form method="post" action="traitement_contact.php">
   <p><label>Nom : </label><br><input type="text" name="nom_collab" size="50" style="height:25px;"/></p>
   <p><label>Prénom : </label><br><input type="text" name="prenom_collab" size="50" style="height:25px;"/></p>
   <p><label>Message : </label><br><textarea name="message" rows="10" cols="50"></textarea></p>
   <input type="submit" value="Envoyer"/>
  </form>
</div>
