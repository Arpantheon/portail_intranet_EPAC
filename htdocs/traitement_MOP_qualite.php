<?php include('header.php') ?>

<div class="container">
  <h1> Demande d'une mise au point qualité avec un collaborateur </h1>
</div>
<p> Demande prise en compte </p>
<?php   $nom = $_POST['nom_collab'];
        $prenom = $_POST['prenom_collab'];
        $client = $_POST['client_collab'];
        $commentaire = $_POST['commentaire'];

        $to = "epac@econocom.com";
        $objet = "Demande d'une mise au point qualité avec un collaborateur";
        $headers = "Content-Type: text/html; charset=\"iso-8859-1\"";
        $message = "Bonjour,</br></br>
        Merci de faire une mise au point qualite pour le technicien suivant : </br></br>
        <b>Nom :</b> $nom</br>
        <b>Prenom :</b> $prenom</br>
        <b>Client :</b> $client</br>
        <b>Commentaire :</br></b> $commentaire</br></br>
        Cordialement,</br></br>Portail EPAC";

        //print ($message);
        $mail = mail($to, $objet, $message, $headers);
?>
</body></html>
