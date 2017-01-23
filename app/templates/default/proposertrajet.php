<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>
<div class="sixteen wide column">
  
<form class="ui form" method="POST" action="" enctype="multipart/form-data">

  <div class="field">
    <label>Date du trajet</label>
    <input type="text" name="myform[date]" placeholder="Exemple">
  </div>

  <div class="field">
    <label>Lieu de départ</label>
    <input type="text" name="myform[ville_depart]">
  </div>

  <div class="field">
    <label>Lieu d'arrivée</label>
    <input type="text" name="myform[ville_arrivee]">
  </div>

  <div class="grouped fields">
    <label for="frequence">Fréquence</label>
    
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="frequence" checked="" tabindex="0" class="" value="1">
        <label>Je fais le trajet une fois</label>
      </div>
    </div>
    
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="frequence" tabindex="0" class="" value=""2">
        <label>Je fais le trajet régulièrement</label>
      </div>
    </div>
    
  </div>

  <div class="field">
    <label>Quelle capacité pouvez-vous transporter ?</label>
      <input type="text" name="myform[poids]">
  </div>

  <div class="field">
    <label>Prix par kilo</label>
      <input type="text" name="myform[prix]">
  </div>

  <button class="ui button" type="submit">Valider</button>

 </form>

</div>
<?php $this->stop('main_content') ?>

