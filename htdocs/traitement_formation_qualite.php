<?php include('header.php') ?>

<div class="container">
  <h1> Demande de formation qualité pour un nouveau collaborateur </h1>
</div>
<p> Demande prise en compte </p>
<?php   $nom = $_POST['nom_collab'];
        $prenom = $_POST['prenom_collab'];
        $client = $_POST['client_collab'];
        $commentaire = $_POST['commentaire'];

        $to = "epac@econocom.com";
        $objet = "Demande de formation qualite pour un nouveau collaborateur";
        $headers = "Content-Type: text/html; charset=\"iso-8859-1\"";
        $message = "Bonjour,</br></br>
        Merci de prendre en charge la formation qualite de : </br></br>
        <b>Nom :</b> $nom</br>
        <b>Prenom :</b> $prenom</br>
        <b>Client :</b> $client</br>
        <b>Commentaire :</br></b> $commentaire</br></br>
        Cordialement,</br></br>Portail EPAC";

        //print ($message);
        $mail = mail($to, $objet, $message,$headers);
?>
</body></html>
