<?php
session_start();

if( !isset($_SESSION['utilisateur']) ) {
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>offre</title>
  <link rel="stylesheet" type="text/css" href="lib/semantic/semantic.min.css"> 
  <link rel="stylesheet" href="lib/semantic-calendar/dist/calendar.min.css" />
 
</head>



    <body>
    <!-- Page Contents -->

  <div class="ui inverted vertical  center aligned segment">

    
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
            <a class="ui inverted button">Inscription</a>
            <a class="ui inverted button">Connexion</a>
        </div>
      </div>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tableaudebord</title>
</head>
<body>

      <div class="header"><?= $_SESSION['utilisateur']['civilité'] ?> <?= $_SESSION['utilisateur']['nom'] ?><?= $_SESSION['utilisateur']['prenom'] ?>  </div>
      <div class="meta">
        <a><?= $_SESSION['utilisateur']['telephone'] ?> </a>
      </div>
      <div class="description">
        <?= $_SESSION['utilisateur']['email'] ?> 
      </div>
    </div>
    <div class="extra content">
      <span class="right floated">
        Joined in 2013
      </span>
      <span>
        <i class="user icon"></i>
        75 Friends
      </span>
    </div>
  </div>

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
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="lib/semantic/semantic.min.css">

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="lib/semantic/semantic.min.js"></script>
</html>