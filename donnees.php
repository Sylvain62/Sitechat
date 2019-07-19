<?php include 'inc/header.php' ?>
<?php 
$prenom = $_POST['prenom']; 
$nom = $_POST['nom'];
$mail = $_POST['mail']; 
$number = $_POST['number']; 
$message = $_POST['message'];

echo ("<center> <div class='corps'> <p> Merci de nous avoir contacter nous vous répondrons dans les meilleurs délai. <br/> <u> <b> Récapitulatif: </u> </b> <br/>" . "<b>Prénom: </b>" . $prenom . "<br/>" . "<b>Nom: </b>" . $nom . "<br/>" . "<b>Adresse mail: </b>" . $mail . "<br/>" . "<b>Téléphone: </b>" . $number . "<br/>" . "<b>Message: </b>" . $message . " </div> </p> </center>"); 
?>
<?php include 'inc/footer.php' ?>