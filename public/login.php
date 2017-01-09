<?php 
session_start();
include "lib/connexion.php";


if( isset($_POST['connexion']) ) {
  $query = $dbh->prepare("SELECT * FROM utilisateurs WHERE login = :login AND password = :password");
  $query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
  $query->bindValue('password', $_POST['password'], PDO::PARAM_STR);
  $query->execute();

  $n = $query->rowCount();
  if( $n == 1) {
    $utilisateur = $query->fetch();
    $_SESSION['utilisateur']['nom'] = $utilisateur['nom'];
    $_SESSION['utilisateur']['prenom'] = $utilisateur['prenom'];
    $_SESSION['utilisateur']['civilite'] = $utilisateur['civilite'];
    $_SESSION['utilisateur']['telephone'] = $utilisateur['telephone'];
    $_SESSION['utilisateur']['email'] = $utilisateur['email'];

    header('location: tableaudebord.php');
  
 }
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
  
    <style type="text/css">
      body {
        background-color: #DADADA;
      }
      body > .grid {
        height: 100%;
      }
      .image {
        margin-top: -100px;
      }
      .column {
        max-width: 450px;
      }
    </style>

 
</head>
<form method="POST" action="">
<body>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
     
      <div class="content">
        Connectez-vous à votre compte
      </div>
    </h2>
    
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="login" placeholder="Login">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">
          <input type="submit" name="connexion" value="Connexion">
        </div>
      </div>

    </form>

    
  </div>
</div>

</body>
  <footer>
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
</footer>
</html>