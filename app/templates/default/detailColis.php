<?php $this->layout('layout_3'); ?>

<?php $this->start('main_content') ?>
	<ul>
		<li>
	      <p><?=$colis['prix']?>€</p>
	      <img src="/assets/uploads/<?=$colis['photo']?>"/>
	      <p><?=$colis['nom']?></p>
	      <p><?=$colis['ville_depart']?></p>
	      <p><?=$colis['ville_arrivee']?></p> 
	      <p><?=$colis['date_livraison']?></p>
	      <p><?=$colis['poids']?>Kg</p>
	     </li>
	      <button class="positive ui button">Demande de reservation</button>
	</ul>

<?php $this->stop('main_content') ?>