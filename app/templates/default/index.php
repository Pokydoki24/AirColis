<?php $this->layout('layout_2', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="ui inverted header background">
  <h1>Livraison entre particuliers par avion</h1>
  <h2>Vous avez un colis à expedier </h2>
  <div class="ui bulleted list">
  <div class="item">Expedieur,Aircolis vous informe des places disponibles</div>
  <div class="item">Voyageur,Aircolis rentabilise vos voyages</div>
<a href="<?= $this->url('expedier') ?>"><button class="positive large ui button"> Expedier un colis</button></a>
<a href="<?= $this->url('proposertrajet') ?>" ><button class="positive ui  large button">Proposer un trajet</button></a>
</div>
</div>


<br>
<h3>Annonces de colis à expedier</h3>
  <div class="ui six column grid">
  <table class="ui inverted blue selectable celled right aligned  table">
  <thead>
    <tr>
      <th>nom</th>
      <th>ville de depart</th>
      <th>ville d'arrivee</th>
      <th>date de livraison</th>
      <th>poids</th>
      <th>prix</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> 
        </div>
      </td>
      <?php foreach($liste_colis as $colis) { ?>
      <td><?=$colis['id']?></td>
      <td><?=$colis['nom']?></td>
      <td><?=$colis['ville_depart']?></td>
      <td><?=$colis['ville_arrivee']?></td> 
      <td><?=$colis['date_livraison']?></td>
      <td><?=$colis['poids']?>KG</td> 
      <td><?=$colis['prix']?>E</td>  
    </tr>

  </tbody>
  <th></th>   
<?php } ?>  
</table>
</div>
<div style="clear:both;display:block;"></div>
<br>


<h3>Annonces de voyageurs ayant des kilos à disposition</h3>
<div class="column">
<table class="ui inverted teal selectable celled  right aligned  table">
  <thead>
    <tr>
      <th></th>
      <th>id</th>
      <th>villeDepart</th>
      <th>villeArrivee</th>
      <th>dateTrajet</th>
      <th>poidsPropose</th>
      <th>prixpropose</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> 
        </div>
      </td>
      <?php foreach($liste_trajet as $trajet) { ?>
      <td><?=$trajet['id']?></td>
      <td><?=$trajet['villeDepart']?></td>
      <td><?=$trajet['villeArrivee']?></td>
      <td><?=$trajet['date']?></td>
      <td><?=$trajet['poids']?>KG</td> 
      <td><?=$trajet['prix']?>E</td> 
    </tr>

  </tbody>
  <th></th>   
<?php } ?>  
</table>
</div>
<div style="clear:both;display:block;"></div>
<br><br><br>

<?php $this->stop('main_content') ?>
