<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>

<form method="POST" action="">

  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <div class="content">
        <h2>Inscrivez-vous</h2>
      </div>
      <form class="ui large form">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <select name="myform[civilite]" id="civilite">
              <option value="0"> -- Selectionner votre civilité -- </option> 
                <option value="1">M.</option>                  
                <option value="2">Mme</option>                  
                <option value="3">Mlle</option>                  
              </select>
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="myform[nom]" placeholder="Nom"><br>
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="myform[prenom]" placeholder="Prenom"><br>
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
             <i class="street view icon"></i>
             <input type="text" name="myform[adresse]" placeholder="adresse"><br>
           </div>
         </div>

         <div class="field">
          <div class="ui left icon input">
            <i class="street view icon"></i>
            <input type="text" name="myform[ville]" placeholder="ville"><br>
          </div>
        </div>

        <div class="field">
          <div class="ui left icon input">
           <i class="mobile icon"></i>
           <input type="text" name="myform[telephone]" placeholder="telephone"><br>
         </div>
       </div>

       <div class="field">
        <div class="ui left icon input">
          <i class="mail icon"></i>
          <input type="email" name="myform[email]" placeholder="email"><br>
        </div>
      </div>

     <div class="field" >
      <div class="ui left icon input">
        <i class="lock icon"></i>
        <input type="password" name="myform[password]" placeholder="Password"><br>
      </div>
    </div>

    <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" tabindex="0">
      <label>J'accepte les conditions generales</label>
    </div>
  </div>
    <div class="ui fluid large submit button">
      <input type="submit" name="valider" value="valider">
    </div>
  </div>

</form>

<?php if(!empty($errors)): ?>
<div class="erreur">
<!-- <?php //print_r($errors) ?> -->

<?php if(empty($_POST['myform']['civilite'])) {echo "Veuillez votre civilité <br>"  ;} ?>
<?php if(empty($_POST['myform']['nom'])) {echo "Veuillez saisir votre nom <br>" ;} ?>
<?php if(empty($_POST['myform']['prenom'])) {echo "Veuillez saisir votre prenom<br>" ;} ?>
<?php if(empty($_POST['myform']['adresse'])) {echo "Veuillez saisir votre adresse <br>" ;} ?>
<?php if(empty($_POST['myform']['telephone'])) {echo "Veuillez saisir votre numero de telephone <br>"  ;} ?>
<?php if(empty($_POST['myform']['ville'])) {echo "Veuillez saisir votre ville <br>"  ;} ?>
<?php if(empty($_POST['myform']['email'])) {echo "Veuillez saisir votre email <br>"  ;} ?>
<?php if(empty($_POST['myform']['password'])) {echo "Veuillez saisir votre mot de passe <br>"  ;} ?>
</div>
<?php endif ?>  

<?php $this->stop('main_content') ?>

