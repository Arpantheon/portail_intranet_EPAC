<?php include('header.php') ?>

<div class="container">
  <h1> Demande de mouvement collaborateur </h1>
</div>
<p> Demande prise en compte </p>
<?php   $nom = $_POST['nom_collab'];
        $prenom = $_POST['prenom_collab'];
        $clientOut = $_POST['clientOut_collab'];
        $clientIn = $_POST['clientIn_collab'];
        $commentaire = $_POST['commentaire'];

        $to = "epac@econocom.com";
        $objet = "Demande de mouvement collaborateur";
        $headers = "Content-Type: text/html; charset=\"iso-8859-1\"";
        $message = "Bonjour,</br></br>
        Merci de prendre en compte le mouvement du collaborateur suivant : </br></br>
        <b>Nom :</b> $nom</br>
        <b>Prenom :</b> $prenom</br>
        <b>Client initial :</b> $clientOut</br>
        <b>Client final :</b> $clientIn</br>
        <b>Commentaire :</br></b> $commentaire</br></br>
        Cordialement,</br></br>Portail EPAC";

        print ("Je suis un test GitHub");
        $mail = mail($to, $objet, $message, $headers);
?>
</body></html>
