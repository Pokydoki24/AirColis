<?php
session_start();

if( !isset($_SESSION['utilisateur']) ) {
  header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Homepage - Semantic</title>
  
  <link rel="stylesheet" type="text/css" href="lib/semantic/semantic.css">

 <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

  <script src="lib/semantic/semantic.js"></script>

  
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
 
<script src="lib/semantic/semantic.min.js"></script>
</head>
<body>

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item">AirColis</a>
        <a class="item">Comment ca marche?</a>
        <a class="item">Expedier</a>
        <a class="item">Transporter</a>
        <a class="item">Voir les annonces</a>
        <div class="right item">
          <a href="inscription.php" class="ui inverted button">Inscription</a>
          <a href="login.php" class="ui inverted button">Connexion</a>
        </div>
      </div>
    </div>
    <html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tableaudebord</title>
</head>
<body>
        <!-- <?php
        // echo "<pre>";
        //   print_r($_SESSION);
        // echo "</pre>";
         ?> -->
    
           <div class="ui list">
               <div class="item">
                <i class="users icon"></i>
  
                 <?= $_SESSION['utilisateur']['civilite'] ?> 
                 <?= $_SESSION['utilisateur']['nom'] ?> 
                 <?= $_SESSION['utilisateur']['prenom'] ?> 
              </div class="item">
              <div class="item">
               <i class="mail icon"></i>
               <?= $_SESSION['utilisateur']['email'] ?> 
               </div class="item">
              <div class="item">
            <i class="phone icon"></i>
            <?= $_SESSION['utilisateur']['telephone'] ?> 
            </div class="item">
         </div class="ui list">

<br><br><br><br><br><br><br><br>
      
   
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <div class="ui inverted link list">
            <a href="#" class="item">AirColis, comment ça marche ?</a>
            <a href="#" class="item">Foire aux questions</a>
            <a href="#" class="item">Contact</a>
            <a href="#" class="item">Envoi moins cher</a>
            <a href="#" class="item">Qu'est-ce que la livraison collaborative ?</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>


</body>

</html>
