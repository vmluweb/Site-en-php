<?php
require_once ("models/User.php");
deleteUser($_GET['id']);
header("Location: index.php?page=utilisateurs");
