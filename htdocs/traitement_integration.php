<?php include('header.php') ?>

<div class="container">
	<h1> Demande de prise en charge d'un nouveau collaborateur </h1>
</div>
<p> Demande prise en compte </p>
<?php   $nom = $_POST['nom_collab'];
        $prenom = $_POST['prenom_collab'];
        $societe = $_POST['societe_collab'];
        $inDate = $_POST['inDate_collab'];
        $outDate = $_POST['outDate_collab'];
        $callnumber = $_POST['callnumber_collab'];
        $email = $_POST['email_collab'];
        $client = $_POST['client_collab'];
        $fonction = $_POST['fonction_collab'];

        $to = "epac@econocom.com";
        $objet = "Prise en charge d'un nouveau collaborateur";
				$headers = "Content-Type: text/html; charset=\"iso-8859-1\"";
        $message = "Bonjour,</br></br>
        Merci de prendre en charge l'integration de ce nouvel arrivant : </br></br>
        <b>Nom :</b> $nom</br>
        <b>Prenom :</b> $prenom</br>
        <b>Societe :</b> $societe</br>
        <b>Date demarrage :</b> $inDate</br>
        <b>Date de fin de contrat (si prestataire) :</b> $outDate</br>
        <b>Numero de telephone :</b> $callnumber</br>
        <b>Adresse Email :</b> $email</br>
        <b>Client :</b> $client</br>
        <b>Fonction :</b> $fonction</br></br>
        Cordialement,</br></br>Portail EPAC";

        //print ($message);
        $mail = mail($to, $objet, $message, $headers);
?>
</body></html>
