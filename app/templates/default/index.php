<?php $this->layout('layout_2') ?>

<?php $this->start('main_content') ?>
<div class="ui inverted header background">
  <h1>Livraison entre particuliers par avion</h1>
  <h2>Vous avez un colis à expedier </h2>
  <div class="ui bulleted list">
  <div class="item">Expedieur,Aircolis vous informe des places disponibles</div>
  <div class="item">Voyageur,Aircolis rentabilise vos voyages</div>
</div>
</div>

<br>
<h3>Annonces de colis à expedier</h3>
  <div class="ui six column grid">
  <table class="ui inverted grey selectable celled right aligned  table">
  <thead>
    <tr>
      <th></th>
      <th>Nom</th>
      <th>Ville de depart</th>
      <th>Ville d'arrivee</th>
      <th>Date de livraison</th>
      <th>detail</th>
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
      <td><?=$colis['nom']?></td>
      <td><?=$colis['ville_depart']?></td>
      <td><?=$colis['ville_arrivee']?></td> 
      <td><?=$colis['date_livraison']?></td>
      <td><a href="<?=$this->url('detailColis',['id'=>$colis['id']]);?>">Detail</a></td>
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
      <th>villeDepart</th>
      <th>villeArrivee</th>
      <th>dateTrajet</th>
      <th>poidsdisponible</th>
      <th>prix/kg</th>
      <th>detail</th>
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
      <td><?=$trajet['ville_depart']?></td>
      <td><?=$trajet['ville_arrivee']?></td>
      <td><?=$trajet['date_trajet']?></td>
      <td><?=$trajet['poids']?>KG</td> 
      <td><?=$trajet['prix']?>E</td> 
      <td><a href="<?=$this->url('detailTrajet',['id'=>$trajet['id']]);?>">Detail</a></td>
    </tr>

  </tbody>
  <th></th>   
<?php } ?>  
</table>
</div>
<div style="clear:both;display:block;"></div>
<br><br><br>

<?php $this->stop('main_content') ?>
