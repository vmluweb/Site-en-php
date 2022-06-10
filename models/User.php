<!--  CTRL + R barre de recherches dossiers-->
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
