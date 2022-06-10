<header>
    <nav class="navbar navbar-expand-lg bg-light" id="menub">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Brand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=info">En savoir plus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=utilisateurs">Utilisateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="index.php?page=contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="index.php?page=articles&action=new">Nouvel article</a>
        </li>
        <li class="nav-item" id="connected">
        <?php
        if(isset($_SESSION["user"])) {
          ?>
          <a class="nav-link" href="?page=deconnexion">Déconnexion</a>
        <?php
        } else{
          ?>
          <a href="index.php?page=connexion">Connexion</a>
          <?php
        }
        ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<br>
<br>