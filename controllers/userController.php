<?php
// Model utilisateurs
require_once("models/User.php");

$users = getUsers();

// View
include("pages/utilisateurs.php");