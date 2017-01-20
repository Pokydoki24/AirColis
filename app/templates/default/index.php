<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
  
  <table class="ui compact celled definition table">
  <thead>
    <tr>
      <th></th>
      <th>id</th>
      <th>user_id</th>
      <th>nom_colis</th>
      <th>ville_depart</th>
      <th>ville_arrivee</th>
      <th>date_livraison</th>
      <th>poids_colis</th>
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
      <td><?=$colis['user_id']?></td>
      <td><?=$colis['nom_colis']?></td>
      <td><?=$colis['ville_depart']?></td>
      <td><?=$colis['ville_arrivee']?></td> 
      <td><?=$colis['date_livraison']?></td>
      <td><?=$colis['poids_colis']?></td> 
      <td><?=$colis['prix']?></td>  
    </tr>

  </tbody>
  <th></th>   
<?php } ?>  
</table>

<table class="ui compact celled definition table">
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
      <td><?=$trajet['poids']?></td> 
      <td><?=$trajet['prix']?></td> 
    </tr>

  </tbody>
  <th></th>   
<?php } ?>  
</table>

<?php $this->stop('main_content') ?>
