<?php
session_start();
include "lib/connexion.php";

if( isset($_POST['inscrire']) ) {
  $query = $dbh->prepare('INSERT INTO utilisateurs (civilite,nom,prenom,telephone,email,login,password)VALUES(:civilite,:nom,:prenom,:telephone,:email,:login,:password)');
$query->bindValue('civilite', $_POST['civilite'], PDO::PARAM_INT);
$query->bindValue('nom', $_POST['nom'], PDO::PARAM_STR);
$query->bindValue('prenom', $_POST['prenom'], PDO::PARAM_STR);
$query->bindValue('telephone', $_POST['telephone'], PDO::PARAM_STR);
$query->bindValue('email', $_POST['email'], PDO::PARAM_STR);
  $query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
  $query->bindValue('password', $_POST['password'], PDO::PARAM_STR);
  $query->execute();
    header('location: login.php');
  }


?>


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

    </head>
<form method="POST" action="">
<body>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <!-- <h2 class="ui teal image header"> -->
     
      <div class="content">
        Inscrivez-vous
      </div>
   <!--  </h2>
     -->
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <select name="civilite" id="">
  <option value="0"></option>                  
  <option value="1">M.</option>                  
  <option value="2">Mme</option>                  
  <option value="3">Mlle</option>                  
      </select>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="myform[nom]" placeholder="Nom"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="myform[prenom]" placeholder="Prenom"><br>
          </div>
        </div>
         <div class="field">
          <div class="ui left icon input">
            <input type="text" name="myform[datedenaissance]" placeholder="datedenaissance"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <input type="text" name="myform[ville]" placeholder="ville"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <input type="text" name="myform[telephone]" placeholder="telephone"><br>
          </div>
        </div>
         <div class="field">
          <div class="ui left icon input">
            <input type="text" name="myform[email]" placeholder="email"><br>
          </div>
        </div>
        
        <div class="field">
          <div class="ui left icon input">
            <input type="text" name="myform[login]" placeholder="Login"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="text" name="myform[password]" placeholder="Password"><br>
          </div>
        </div>
        <div class="ui  submit button">
          <input type="submit" name="register" value="S'inscrire">
        </div>
      </div>

    </form>
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
