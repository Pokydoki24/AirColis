<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>
<div class="sixteen wide column">

<form class="ui form" method="POST" action="" enctype="multipart/form-data">

  <div class="field">
    <label>Nom du colis</label>
    <input type="text" name="myform[nom]" placeholder="Nom du colis">
  </div>

  <div class="field">
    <label>Description</label>
    <textarea name="myform[description]"></textarea>
  </div>

  <div class="field">
    <label>Ville de depart</label>
    <input type="text" name="myform[ville_depart]">
  </div>

  <div class="field">
    <label>Ville d'arrivée</label>
    <input type="text" name="myform[ville_arrivee]">
  </div>

  <!-- Insertion calendrier -->
  <label>A livrer avant : </label>
   <div class="ui calendar" id="calendar1">
      <div class="ui input left icon">
      <i class="calendar icon"></i>
         <input type="text" name="myform[date_livraison]" placeholder="Date/Time">
     </div>
  </div>

  <div class="field">
    <label>Poids du colis</label>
      <select id="poids" name="myform[poids]">
        <option value="1">Moins de 5 kilos</option>
        <option value="2">Entre 5 et 10 kilos </option>
        <option value="3">Plus de 10 kilos</option>
      </select>
  </div>

  <div class="field">
    <label>Prix proposé</label>
    <input type="text" name="myform[prix]" placeholder="Estimation de votre prix en €">
  </div>

   <div class="field">
    <label>Email</label>
    <input type="email" name="myform[email]" placeholder="Votre email">
  </div>

  <div class="field">
    <label>Importer une photo</label>
    <input type="file" name="myform[photo]">
  </div>

 <button class="ui button" name="valider" type="submit">Valider</button>

 <div class="ui error message"></div>

 <!-- API Google map -->

</form>

</div>

<?php if(!empty($errors)): ?>
<div class="erreur">
<!-- <?php //print_r($errors) ?> -->

<?php if(empty($_POST['myform']['nom'])) {echo "Veuiller saisir votre nom <br>"  ;} ?>
<?php if(empty($_POST['myform']['ville_depart'])) {echo "Veuillez saisir la ville de depart <br>"  ;} ?>
<?php if(empty($_POST['myform']['ville_arrivee'])) {echo "Veuillez saisir la ville d'arrivée <br>" ;} ?>
<?php if(empty($_POST['myform']['date_livraison'])) {echo "Veuillez saisir une date <br>" ;} ?>
<?php if(empty($_POST['myform']['poids'])) {echo "Veuillez saisir le poids du colis <br>" ;} ?>
<?php if(empty($_POST['myform']['prix'])) {echo "Veuillez saisir votre prix <br>"  ;} ?>
<?php if(empty($_POST['myform']['email'])) {echo "Veuillez saisir votre email <br>";} ?>
<?php if(empty($_POST['myform']['photo'])) {echo "Veuillez choisir une photo" ;} ?>
</div>
<?php endif ?>  

<?php $this->stop('main_content') ?>

<?php $this->start('javascript') ?>

<script type="text/javascript" src="lib/semantic-calendar/dist/calendar.js"></script>

<script>$('#calendar1').calendar();</script>

<!-- <script>

  $('.ui.form')
  .form({
    fields: {
      nom: {
        identifier: 'nom',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez saisir votre nom'
          }
        ]
      },
      ville_depart: {
        identifier: 'ville_depart',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez saisir la ville de depart'
          }
        ]
      },
      ville_arrivee: {
        identifier: 'ville_arrivee',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez saisir la ville d\'arrivée'
          }
        ]
      },
      date_livraison: {
        identifier: 'date_livraison',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez saisir une date'
          }
        ]
      },
      poids: {
        identifier: 'poids',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez saisir le poids du colis'
          }
        ]
      },
      prix: {
        identifier: 'prix',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez saisir le prix'
          }
        ]
      },
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez saisir votre email'
          }
        ]
      },
      : {
        identifier: 'photo',
        rules: [
          {
            type   : 'empty',
            prompt : 'Veuillez selectionner une photo'
          }
        ]
      }
    }
  })
;


</script> -->

<?php $this->stop('javascript') ?>