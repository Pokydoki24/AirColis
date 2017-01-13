<?php $this->layout('layout') ?>

<?php $this->start('main_content') ?>
<form class="ui form" method="POST" action="">
<!-- Liste deroulante -->
  <div class="field">
      <label>Civilite</label>
          <select id="civilite" name="civilite">
            <option>Madame</option>
            <option>Monsieur</option>
            <option>Mademoiselle</option>
          </select>
  </div>

  <div class="field">
    <label>Nom</label>
    <input type="text" name="nom" placeholder="Votre nom">
    <?php if(isset($erreurNom)) {echo $erreurNom;} ?>
  </div>

  <div class="field">
    <label>Prenom</label>
    <input type="text" name="prenom" placeholder="Votre prenom">
    <?php if(isset($erreurPrenom)) {echo $erreurPrenom;} ?>
  </div>

  <div class="field">
    <label>Date de naissance</label>
    <input type="text" name="dateNaissance" placeholder="Votre date de naissance">
    <?php if(isset($erreurDateNaissance)) {echo $erreurDateNaissance;} ?>
  </div>

  <div class="field">
    <label>Ville</label>
    <input type="text" name="ville" placeholder="Votre ville">
    <?php if(isset($erreurVille)) {echo $erreurVille;} ?>
  </div>

  <div class="field">
    <label>Numero de telephone</label>
    <input type="text" name="telephone" placeholder="Votre numero de telephone">
    <?php if(isset($erreurTelephone)) {echo $erreurTelephone;} ?>
  </div>

  <div class="field">
    <label>Email</label>
    <input type="email" name="email" placeholder="Votre email">
    <?php if(isset($erreurMail)) {echo $erreurMail;} ?>
  </div>

  <div class="field">
    <label>Mot de passe</label>
    <input type="password" name="password">
    <?php if(isset($erreurPassword)) {echo $erreurPassword;} ?>
  </div>

  <div class="field">
    <label>Confirmation mot de passe</label>
    <input type="password" name="confirmPassword">
    <?php if(isset($erreurConfirm)) {echo $erreurConfirm;} ?>
  </div>

  <input type="submit" name="valider" value="Valider">
</form>
<?php $this->stop('main_content') ?>