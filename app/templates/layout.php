<!DOCTYPE html>
<html>
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>AirColis</title>

    <!-- <link rel="stylesheet" type="text/css" href="lib/semantic/semantic.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css" />  
    <link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
    
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>

  </head>

  <body>

    <!-- Page Contents -->
    <div class="ui fixed inverted menu">
        <div class="ui container">
          <a href="<?= $this->url('index') ?>" class="header item">AirColis</a>
          <a href="#commentcamarche.html" class="item">Comment ca marche?</a>
          <a href="#expedier.php" class="item">Expedier</a>
          <a href="#" class="item">Transporter</a>
          <a href="#" class="item">Voir les annonces</a>
          <a href="#inscription.php" class="ui inverted button">Inscription</a>
          <a href="#" class="ui inverted button">Connexion</a> 
        </div>
    </div>

    <?php echo $this->section('main_content') ?>


    <div class="ui inverted vertical footer segment">
      <div class="ui container">
        <div class="ui inverted link list">
          <a href="#commentcamarche.html" class="item">AirColis, comment ça marche ?</a>
          <a href="#" class="item">Foire aux questions</a>
          <a href="#" class="item">Contact</a>
          <a href="#" class="item">Envoi moins cher</a>
          <a href="#" class="item">Qu'est-ce que la livraison collaborative ?</a>
          <a href="http://www.taillecabine.com/compagnies/taille-bagages-cabine.php" class="item">Taille bagages</a>
        </div>
      </div>
    </div>

    <footer>Create by: Aymeric Notta - Copyright 2016</footer>
	<?php echo $this->section("javascript") ?>
  </body>

</html>