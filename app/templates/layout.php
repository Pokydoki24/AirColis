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
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>

  </head>

  <body>

    <!-- Page Contents -->
         
        <div class="ui stackable large  menu">
           <div class="ui container">
           <div class="ui green button">
          <a href="<?= $this->url('index') ?>">AirColis<i class="suitcase icon"></i>
          </a>
          </div>
          <div class="ui blue button">
          <a href="#" >Comment ca marche?</a>
          </div>
          <div class="ui green button">
          <a href="<?= $this->url('expedier') ?>">Expedier</a>
          </div>
          <div class="ui blue button">
          <a href="<?= $this->url('proposertrajet') ?>" >Proposer </a>
          </div>
          <div class="ui green button">
          <a href="<?= $this->url('trajetlisting') ?>">Trajets</a>
          </div>
          <div class="mobile only sixteen wide colum">
          <a href="<?=$this->url('inscription')?>" class=" ui  left floated primary button">Inscription</a>
          <?php if(!isset($_SESSION['user'])): ?>
          <a href="<?= $this->url('connexion') ?>"  class="ui  right floated secondary button">Connexion</a>
           <?php else: ?>
              <a class="item" href="<?= $this->url('logout')?>">Déconnexion</a>
              <?php endif ?>
          </div>
          </div>
          </div>
        
          
      
    

    <?php echo $this->section('main_content') ?>


    <div class="ui inverted vertical footer segment">
    <div class="ui container">
          <div class="ui inverted link list">
          <a href="commentcamarche.html" class="item">AirColis, comment ça marche ?</a>
          <a href="#" class="item">Foire aux questions</a>
          <a href="#" class="item">Contact</a>
          <a href="#" class="item">Envoi moins cher</a>
          <a href="#" class="item">Qu'est-ce que la livraison collaborative ?</a>
          <a href="http://www.taillecabine.com/compagnies/taille-bagages-cabine.php" class="item">Taille bagages</a>
      </div>
    </div>
    </div>
  
    <footer><i class="suitcase icon"></i>Created by: Aymeric Notta - Copyright 2017</footer>
	<?php echo $this->section("javascript") ?>
  </body>

</html>