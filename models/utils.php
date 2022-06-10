<?php
// déclaration de la fonction de connexion: on relie le code à la view
function connection()
{
    // Utilisateur de MySQL
    $user = "root";

    // Mot de passe de l'utilisateur MySQL
    $pass = "";
    // Information sur le serveur MySQL
    $dsn = "mysql:host=localhost;dbname=blog";
    $bdd = new PDO($dsn, $user, $pass);

    return $bdd;
}