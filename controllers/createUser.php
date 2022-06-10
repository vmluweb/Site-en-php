<?php
require_once("models/User.php");
// name space au lieu de require_once c'est mieux
createUser($_POST['login'], $_POST['password']);
header("Location: index.php?page=utilisateurs");