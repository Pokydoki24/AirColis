<?php $this->layout('layout') ?>

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
      <?php foreach($liste as $exportColis) { ?>
      <td><?=$exportColis['id']?></td>
      <td><?=$exportColis['user_id']?></td>
      <td><?=$exportColis['nom_colis']?></td>
      <td><?=$exportColis['ville_depart']?></td>
      <td><?=$exportColis['ville_arrivee']?></td> 
      <td><?=$exportColis['date_livraison']?></td>
      <td><?=$exportColis['poids_colis']?></td> 
      <td><?=$exportColis['prix']?></td>  
    </tr>

  </tbody>
  <th></th>   
<?php } ?>  
</table>

<?php $this->stop('main_content') ?>