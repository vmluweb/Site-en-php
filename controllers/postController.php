<?php
// Model utilisateurs
require_once("models/Post.php");
if (isset($_GET['actions'])) {
    switch ($_GET['actions']) {

        case "delete":
            deletePost($_GET['id']);
            header("Location: index.php?page=articles");
            break;

        case "create":
            createPost($_POST['title'], $_POST['content'], $_SESSION["user"]);
            header("Location: index.php?page=articles");

        case "update":
            $posts = getPostsbyId($_GET['id']);
            include("pages/editUser.php");
            break;

            case "save":
                updatePost($_POST['id'], $_POST['login'], $_POST['password']);
                header("Location: index.php?page=articles");
                break;

                case "new":
                    include("pages/editPosts.php");
                    break;

        default:
            include("pages/404.php");
            break;
            $posts = getUsers();

            // View
            include("pages/articles.php");
            break;
    }
} else {
    $posts = getPosts();
    include("pages/accueil.php");
}
