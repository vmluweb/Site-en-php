<h1>Connexion</h1>
<div class= "connexion">
<form action="index.php?page=connexionForm" method="post">
  <div class="mb-3">
    <label for="login" class="form-label">Login:</label>
    <input type="textarea" class="form-control" id="login" aria-describedby="emailHelp" name="login" <?php
    if(isset($_COOKIE['user']))
    echo "value='".$_COOKIE['user']."'";
    ?>>
  </div>
  
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
<!-- Formulaire d'inscription -->
<form action="index.php?page=utilisateurs&actions=create" method="post">
  <div>
    <p>Pas encore inscrit? C'est le moment de se lancer !</p>
  </div>
  <div class="mb-3">
    <label for="createLogin" class="form-label">Identifiant:</label>
    <input type="textarea" class="form-control" id="createlogin" aria-describedby="emailHelp" name="login">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe:</label>
    <input type="password" class="form-control" id="createPassword" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
</div>