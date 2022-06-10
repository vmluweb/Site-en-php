<!--  CTRL + R barre de recherches dossiers-->
<?php
// déclaration de la fonction de connexion: on relie le code à la view
require_once("models/utils.php");

// Retourne la liste des utilisateurs

function getUsers()
{
    $bdd = connection();
    // réponse du serveur
    $reponse = $bdd->query("SELECT * FROM users");

    return $reponse->fetchAll();
}

function getUserByLogin($login, $pwd)
{
    $bdd = connection();
    // réponse du serveur
    $sql = " SELECT *
    FROM users
    WHERE name=?
    AND password=?";

    // Préparation de la requête
    $requete = $bdd->prepare($sql);

    // Exécution de la requête en passant 2 paramètres

    $requete->execute([$login, $pwd]);
    return $requete->fetchAll();
}
function loginByUser(string $login, string $pwd) {
function getUserByLogin($login, $pwd)
{
    $bdd = connection();
    // réponse du serveur
    $sql = " SELECT *
    FROM users
    WHERE name=?
    AND password=?";

    // Préparation de la requête
    $requete = $bdd->prepare($sql);

    // Exécution de la requête en passant 2 paramètres

    $requete->execute([$login, $pwd]);
    return $requete->fetchAll();
}};

// Permet de créer un nouvel utilisateur dans la BDD
function createUser(string $name, string $pwd)
{
    // Connexion à la BDD
    $bdd = connection();
    // réponse du serveur
    $sql = "INSERT INTO users (name, password)
    VALUES (?,?)";

    // Préparation de la requête
    $requete = $bdd->prepare($sql);

    // Exécution de la requête en passant 2 paramètres
    return $requete->execute([$name, $pwd]);
}

// Permet de supprimer un utilisateur dans la BDD
function deleteUser(int $id)
{
    // Connexion à la BDD
    $bdd = connection();
    // réponse du serveur
    $sql = "DELETE FROM users WHERE id = ? ";

    // Préparation de la requête
    $requete = $bdd->prepare($sql);

    // Exécution de la requête en passant 2 paramètres
    return $requete->execute([$id]);
}

// Permet de mettre à jour un utilisateur dans la BDD
function updateUser(int $id, string $name, string $pwd)
{
    // Connexion à la BDD
    $bdd = connection();
    // réponse du serveur
    $sql = "UPDATE users SET name=?, password=? WHERE id = ?";

    // Préparation de la requête
    $requete = $bdd->prepare($sql);

    // Exécution de la requête en passant 3 paramètres
    return $requete->execute([$name, $pwd, $id]);
}

// Retourne un utilisateur grâce à son ID
function getUserById(int $id)
{
    // Connexion à la BDD
    $bdd = connection();
    // réponse du serveur
    $sql = " SELECT *
    FROM users
    WHERE id=?";

    // Préparation de la requête
    $requete = $bdd->prepare($sql);

    // Exécution de la requête en passant l'identifiant

    $requete->execute([$id]);
    $data = $requete->fetchAll();
    // Retourne le 1er enregistrement de la requête
    return $data[0];
}
