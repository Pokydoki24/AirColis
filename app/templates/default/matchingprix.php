<?php
    $titre = "Matchingprix";
?>



<?php $this->layout('layout'); ?>


<?php $this->start('main_content') ?>


<?php $this->start('main_content') ?>
<table class="ui compact celled definition table">
  <thead>
    <tr>
    	<th></th>
    	<th>id</th>
      <th>villeDepart</th>
      <th>villeArrivee</th>
      <th>dateTrajet</th>
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
      <?php foreach($liste as $trajet) { ?>
      <td><?=$trajet['id']?></td>
      <td><?=$trajet['villeDepart']?></td>
      <td><?=$trajet['villeArrivee']?></td>
      <td><?=$trajet['dateTrajet']?></td>
      <td><?=$trajet['prix']?></td>  
    </tr>
  </tbody>
  <th></th>   
<?php } ?>  
</table>

<?php $this->stop('main_content') ?>