<pre>

<?php

//afficher les informations du formulaire
echo($_POST["prenom"]);

echo "</br>";

echo($_POST["nom"]);

echo "</br>";

//validation de l'email
$emailIsValid = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

//validation de l'email et l'afficher
if(!empty($emailIsValid)){

     echo($emailIsValid);

}

echo "</br>";

echo($_POST["pays"]);

echo "</br>";

echo($_POST["genre"]);

echo "</br>";

echo($_POST["sujet"]);

echo "</br>";

//sanitization du message
$tachesani = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

//validation du message et l'afficher
if(!empty($tachesani)){

     echo($tachesani);

}

//envoie des informations dans l'email indiquer par l'utilisateur
$to = $_POST["email"];

$subject = 'Mail pour le support technique';

$headers = 'Mime-Version: 1.0'."\r\n";

$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

$headers .= "\r\n";

$message  = 'De: ' . $_POST["nom"] . $_POST["prenom"] . "<br />";

$message .= 'Email: ' . $_POST["email"] . "<br />";

$message .= 'Type de probleme: ' . $_POST["sujet"] . "<br />";

$message .= "Message:<br />" . $_POST["message"] . "<br />";

$envoi = mail($to, $subject, $message, $headers);

?>

</pre>