<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "contact";
            include("pages/contact.php");
            break;

        case "connexion";
            include("pages/connexion.php");
            break;

        case "info";
            include("pages/more.php");
            break;

        case "contactForm";
            include("controllers/contactForm.php");
            break;

        case "connexionForm";
        include("controllers/connexionForm.php");
            break;
            
        case "deconnexion";
        include("controllers/deconnexion.php");
            break;
            
        case "utilisateurs";
        include("controllers/userController.php");
            break;

        case "createUser";
        include("controllers/createUser.php");
            break;

        case "deleteUser";
        include("controllers/deleteUser.php");
            break;

            case "articles";
        include("controllers/postController.php");
            break;

        default:
            include("pages/404.php");
            break;
    }
} else {
    include('controllers/postController.php');
}
