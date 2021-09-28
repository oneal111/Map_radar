<?php $name = $_POST['nom'];
$email = $_POST['email'];
$titre = $_POST['titre'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "jolp791@hotmail.fr";
$subject = $titre;
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>