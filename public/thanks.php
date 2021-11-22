<?php


$usermail = $_POST["user_mail"];

$userNameError = "Un nom est requis !";

$userFirstNameError = "Un prénom est requis !";

$usermailError = "Un E-mail est requis";

$téléphoneError = "Un numéro de téléphone est requis !";

$sportError = "Vous devez choisir un sport";

$userMessageError = "Un message est requis";


$message = "Merci " . $_POST['user_firstname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de " . $_POST['sport'] . " ." . PHP_EOL . "Un de nos conseiller vous contactera soit à l'adresse " . $_POST['user_mail'] . " ou par téléphone au " . $_POST['téléphone'] . " dans les plus brefs délais pour traiter votre demande :" . PHP_EOL . $_POST['user_message'];




if (empty($_POST['user_name'])) {
    echo $userNameError; 
} elseif (empty($_POST['user_firstname'])) {
    echo $userFirstNameError; 
} elseif (empty($_POST['téléphone'])) {
    echo $téléphoneError;
} elseif (empty($_POST["user_mail"]) || (!filter_var($usermail, FILTER_VALIDATE_EMAIL))) {
    echo $usermailError;
} elseif (empty($_POST["sport"])) {
    echo $sportError;
} elseif (empty($_POST["user_message"])) {
    echo $userMessageError;
} else {
    echo $message;
}
