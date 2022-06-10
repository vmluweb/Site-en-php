<?php
// Traitement de l'information
// Affichage du resultat (View)

if($_POST['message'] && $_POST['emailAdress'] && $_POST['nom'] && ['prenom']){
    $message = $_POST['message'];
    $email = $_POST['emailAdress'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    include("pages/contactFormConfirmation.php");
}