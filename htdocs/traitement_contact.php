<?php include('header.php') ?>

<div class="container">
  <h1> Contact </h1>
</div>
<p> Demande prise en compte </p>
<?php   $nom = $_POST['nom_collab'];
        $prenom = $_POST['prenom_collab'];
        $messageUser = $_POST['message'];

        $to = "epac@econocom.com";
        $objet = "Reception d'un message depuis le portail";
        $headers = "Content-Type: text/html; charset=\"iso-8859-1\"";
        $message = "Bonjour,</br></br>
        $nom $prenom a laisse le message suivant sur le portail : </br></br>$messageUser</br></br>
        Cordialement,</br></br>Portail EPAC";

        //print ($message);
        $mail = mail($to, $objet, $message,$headers);
?>
</body></html>
