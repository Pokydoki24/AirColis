<?php $this->layout('layout') ?>

<?php $this->start('main_content') ?>

<div class="ui inverted header">
  <h1>Livraison entre particuliers par avion</h1>
  <h2>Vous avez un colis à expedier :</h2>
  <div class="ui bulleted list">
  <div class="item">Expedieur,Aircolis vous informe des places disponibles</div>
  <div class="item">Voyageur,Aircolis rentabilise vos voyages</div>
</div>
</div>

<div class="ui vertical stripe segment">
  <a href="<?= $this->url('index') ?>">Nos dernieres annonces<i class="suitcase icon"></i>
          </a>
  
</div>

<div class="ui vertical stripe quote segment">     
  <h3 class="ui header">AirColis, le Covoyage pour vos colis a l'etranger !!! </h3>
  <article>
    
    <h4>100% serein<i class="smile icon"></i></h4>
    <p>Choisissez vous-même, au sein de la communauté, le particulier qui acheminera votre colis. Discutez à tout moment par messages privés. Et pour que vous soyez 100% serein, votre colis est automatiquement assuré. Les galères de colis, avec Cocolis, c'est fini !</p>
  </article>
  <article>
    <h4>Économique<i class="euro icon"></i></h4>
    <p>Grâce au covoiturage de colis, vos frais d'envoi coûtent jusqu'à 80% moins cher que les solutions de transport traditionnelles. Cocolis est plus économique, même pour les meubles et objets lourds ou encombrants. Gardez votre argent pour vos vacances !</p>
  </article>
  <article>
  <h4>Écologique<i class="leaf icon"></i></h4>
  <p>Une chose est sûre : le porteur du colis aurait réalisé le déplacement même sans le colis ! Alors, profiter de ce trajet pour faire livrer un objet, c’est penser à l’environnement. Aucune émission polluante supplémentaire. Une bonne nouvelle, non ?</p>
  </article>
</div>

<div class="ui vertical stripe segment">
    <h3 class="ui header">Envoyer un colis, comment ça marche ?</h3>
    <article>
      <h4>1/ Déposez votre annonce</h4>
      <p>Renseignez les caractéristiques de votre colis : quoi (description, dimensions, poids), où, pour quand et à quel prix. Pensez à ajouter une photo !</p>
    </article>

    <article>
      <h4>2/ Recevez des propositions</h4>
      <p>Les particuliers dont le trajet coïncide avec celui de votre colis vous contactent directement. Discutez ensemble pour fixer les détails par messages privés.</p>
    </article>

    <article> 
      <h4>3/ Validez votre paiement</h4>
      <p>Payez en ligne et renseignez la valeur du colis pour l'assurance. En tant que tiers de confiance, Cocolis ne reverse le paiement au porteur que lorsque vous confirmez que le colis a été livré.</p>
    </article>
</div>

<?php $this->stop('main_content') ?>