<?php $this->layout('layout_3'); ?>

<?php $this->start('main_content') ?>

<ul>
		<li>
	      <p><?=$trajet['prix']?>€</p> 
	      <p><?=$trajet['ville_depart']?></p>
	      <p><?=$trajet['ville_arrivee']?></p> 
	      <p><?=$trajet['date_trajet']?></p>
	      <p><?=$trajet['poids']?>Kg</p>
	     </li>
	     <button class="positive ui button">Demande de reservation</button>
	</ul>

<?php $this->stop('main_content') ?>