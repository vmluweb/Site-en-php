<?php
// déclaration de la fonction de connexion: on relie le code à la view
require_once("models/utils.php");

// Retourne la liste des utilisateurs

function getPosts()
{
    $bdd = connection();
    // réponse du serveur
    $reponse = $bdd->query("SELECT * FROM posts");

    return $reponse->fetchAll();
}

// Permet de créer un nouvel utilisateur dans la BDD
function createPost(string $title, string $content, int $userId)
{
    // Connexion à la BDD
    $bdd = connection();
    // réponse du serveur
    $sql = "INSERT INTO posts (title, content, user_id, created_date)
    VALUES (?,?,?,NOW()) ";

    // Préparation de la requête
    $requete = $bdd->prepare($sql);

    // Exécution de la requête en passant 3 paramètres
    return $requete->execute([$title, $content, $userId]);
}