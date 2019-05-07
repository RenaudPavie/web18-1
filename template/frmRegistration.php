<form action="index.php?page=registration" method="post">
  <div>
    <label for="nom">Nom&nbsp;: </label>
    <input type="text" name="nom" placeholder="Nom :">
  </div>
  <div>
    <label for="prenom">Prénom&nbsp;: </label>
    <input type="text" name="prenom" placeholder="Prénom :">
  </div>
  <div>
    <label for="mail">Mail&nbsp;: </label>
    <input type="mail" name="mail" placeholder="Mail :">
  </div>
  <div>
    <label for="mdp">Prénom&nbsp;: </label>
    <input type="password" name="mdp" placeholder="Mot de passe :">
  </div>
  <div class="">
    <input type="reset" value="Effacer">
    <input type="submit" value="Valider">
  </div>
  <input type="hidden" name="validation">
</form>
