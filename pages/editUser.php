<!-- Modification du profil -->
<form action="index.php?page=utilisateurs&actions=save" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <div>
        <h2>Mise à jour de <?= $user['name'] ?></h2>
    </div>
    <div class="mb-3">
        <label for="createLogin" class="form-label">Identifiant:</label>
        <input type="textarea" class="form-control" id="createlogin" aria-describedby="emailHelp" name="login" value="<?= $user['name'] ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe:</label>
        <input type="password" class="form-control" id="createPassword" name="password" value="<?= $user['password'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>