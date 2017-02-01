<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>

<h3>Infos utilisateur</h3>


<div class="ui list">
  <div class="item">
    <i class="users icon"></i>
    <div class="content">
     <?=$utilisateur['nom']?>
     <?=$utilisateur['prenom']?>
    </div>
  </div>
  <div class="item">
    <i class="marker icon"></i>
    <div class="content">
     <?=$utilisateur['adresse']?>
     <?=$utilisateur['ville']?>
    </div>
  </div>
  <div class="item">
    <i class="mail icon"></i>
    <div class="content">
      <?=$utilisateur['email']?>
    </div>
  </div>
  <div class="item">
    <i class="mobile icon"></i>
    <div class="content">
     <?=$utilisateur['telephone']?>
    </div>
  </div>
</div>

<?php $this->stop('main_content') ?>