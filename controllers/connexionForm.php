<?php
// Factorisation fonction qui prend 2 paramètres: nom d'utilisateur et mot de pass
// Retourne soit l'utilisateur soit faux
require_once("models/User.php");

// function login(string $login, string $pwd)
// {
//     if ($login == "moi" && $pwd == "123") {
//         // je stocke en session l'utilisateur connecté
//         $_SESSION['user'] = $login;
//         setcookie('user', $login);
//         return $login;
//     } else {
//         return false;
//     }
// }

// function loginByUser (string $login, string $pwd){
//     $user = getUserByLogin($login, $pwd);
//    if (isset($user[0])) {
//         $_SESSION['user'] = $user[0]['name'];
//         setcookie('user', $user[0]['name']);
//         return true;
//     } else{
//         return false;
//     }
// }
// Si je suis déjà connecté
if (isset($_SESSION['user'])) {
    include('pages/connexionFormConfirmation.php');
} else {
    $is_logged = getUserByLogin($_POST['login'], $_POST['password']);


    // Si la connexion est réussie
    if ($is_logged) {
        // Je recharge la page pour afficher les bonnes informations dans le menu
        header("Location: index.php?page=connexionForm");
    } else {
        //  Si la connexion à échouer, j'affiche un message d'erreur

        echo '<div class="alert alert-warning" role="alert">Erreur de connexion...</div>';
    }

    if ($_SESSION['user']) {
        include('pages/connexionFormConfirmation.php');
    }
}
