<?php
// déconnexion session
session_destroy();
// redirection vers page d'accueil (racine)
header('Location: index.php');