<pre>

<?php

//message au client
echo "Voici les informations envoyé a Hackers-Poulette";

echo "</br>";

echo "</br>";

//afficher les informations du formulaire

//sanitization du prenom
$prenomsani = filter_var($_POST["prenom"], FILTER_SANITIZE_STRING);

echo($prenomsani);

echo "</br>";

//sanitization du nom
$nomsani = filter_var($_POST["nom"], FILTER_SANITIZE_STRING);

echo($nomsani);

echo "</br>";

//sanitization de l'email
$emailIsSani = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

//validation de l'email
$emailIsValid = filter_var($emailIsSani, FILTER_VALIDATE_EMAIL);

echo($emailIsValid);

echo "</br>";

echo($_POST["pays"]);

echo "</br>";

echo($_POST["genre"]);

echo "</br>";

echo($_POST["sujet"]);

echo "</br>";

//sanitization du message
$tachesani = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

echo($tachesani);

//envoie des informations dans l'email indiquer par l'utilisateur

if (isset($_POST["submit"])) {

$to = "geoffreymarique@gmail.com";

$subject = 'Mail pour le support technique';

$headers = 'Mime-Version: 1.0'."\r\n";

$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

$headers .= "\r\n";

$message  = 'De: ' . $_POST["nom"] . $_POST["prenom"] . "<br />";

$message .= 'Email: ' . $_POST["email"] . "<br />";

$message .= 'Type de probleme: ' . $_POST["sujet"] . "<br />";

$message .= "Message:<br />" . $_POST["message"] . "<br />";

$envoi = mail($to, $subject, $message, $headers);

}

?>

</pre>