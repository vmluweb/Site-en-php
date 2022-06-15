<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un site en PHP</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style.css">
</head>
<body class="container-fluid">
    <!-- Début du menu -->
<?php include("layout/menu.php"); ?>
<!-- Fin du menu -->

    <main>
        <?php
        include("router.php");
         ?>     
    </main>
    <!-- Début du menu -->
<?php include("layout/footer.php"); ?>
<!-- Fin du menu -->
<!-- JavaScript Bundle with Popper -->
<script src="script.js"></script>
</body>
</html>