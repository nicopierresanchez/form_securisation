<?php


$userNameError = "Un nom valide est requis !";

$userFirstNameError = "Un prénom valide est requis !";

$usermailError = "Un E-mail est requis";

$téléphoneError = "Un numéro de téléphone valide est requis !";

$sportError = "Vous devez spécifier un sujet";

$userMessageError = "Un message est requis";


$message = "Merci " . $_POST['user_firstname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de " . $_POST['sport'] . " ." . PHP_EOL . "Un de nos conseiller vous contactera soit à l'adresse " . $_POST['user_mail'] . " ou par téléphone au " . $_POST['téléphone'] . " dans les plus brefs délais pour traiter votre demande :" . PHP_EOL . $_POST['user_message'];
$usermail = $_POST["user_mail"];



if (empty($_POST['user_name'])) {
    return $userNameError; 
} elseif (empty($_POST['user_firstname'])) {
    return $userFirstNameError; 
} elseif (empty($_POST['téléphone'])) {
    return $téléphoneError;
} elseif (empty($_POST["user_mail"]) || (!filter_var($usermail, FILTER_VALIDATE_EMAIL))) {
    return $usermailError;
} elseif (empty($_POST["sport"])) {
    return $sportError;
} elseif (empty($_POST["user_message"])) {
    return $userMessageError;
} else {
    echo $message;
}