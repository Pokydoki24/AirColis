<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>
<div class="sixteen wide column">


<?php if(!empty($errors)): ?>
<div class="erreur">
<?php print_r($errors) ?>
</div>
<?php endif ?>  

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
   <div class="ui calendar" id="example1">
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

 <!-- API Google map -->

</form>

</div>

<?php $this->stop('main_content') ?>

<!-- <?php //$this->start('javascript') ?>

<script type="text/javascript" src="lib/semantic-calendar/dist/calendar.js"></script>

<script>$('#example1').calendar();</script>

<?php //$this->stop('javascript') ?> -->