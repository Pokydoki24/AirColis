
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
  <!-- <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>"> -->

  <style type="text/css">

    .hidden.menu {
      display: none;
    }
    .masthead {
     /* background: url(http://tpe-aerodynamisme-aeronautique.e-monsite.com/medias/album/wallpaper-avion-dans-le-ciel.jpg) no-repeat !important; 

    background-size: cover;
    height: 100%;*/
    background-color: lightskyblue !important;
  }
  .masthead.segment {
    min-height: 100px;
    padding: 1em 0em;
  }
  .masthead .logo.item img {
    margin-right: 1em;
  }
  .masthead .ui.menu .ui.button {
    margin-left: 0.5em;
  }
  .masthead h1.ui.header {
    margin-top: 3em;
    margin-bottom: 0em;
    font-size: 4em;
    font-weight: normal;
  }
  .masthead h2 {
    font-size: 1.7em;
    font-weight: normal;
  }

  .ui.vertical.stripe {
    padding: 8em 0em;
  }
  .ui.vertical.stripe h3 {
    font-size: 2em;
  }
  .ui.vertical.stripe .button + h3,
  .ui.vertical.stripe p + h3 {
    margin-top: 3em;
  }
  .ui.vertical.stripe .floated.image {
    clear: both;
  }
  .ui.vertical.stripe p {
    font-size: 1.33em;
  }
  .ui.vertical.stripe .horizontal.divider {
    margin: 3em 0em;
  }

  .quote.stripe.segment {
    padding: 0em;
  }
  .quote.stripe.segment .grid .column {
    padding-top: 5em;
    padding-bottom: 5em;
  }

  .footer.segment {
    padding: 5em 0em;
  }

  .secondary.pointing.menu .toc.item {
    display: none;
  }

  @media only screen and (max-width: 700px) {
    .ui.fixed.menu {
      display: none !important;
    }
    .secondary.pointing.menu .item,
    .secondary.pointing.menu .menu {
      display: none;
    }
    .secondary.pointing.menu .toc.item {
      display: block;
    }
    .masthead.segment {
      min-height: 350px;
    }
    .masthead h1.ui.header {
      font-size: 2em;
      margin-top: 1.5em;
    }
    .masthead h2 {
      margin-top: 0.5em;
      font-size: 1.5em;
    }
  }


</style>



</head>
<body>

  <!-- Following Menu -->
  <div class="ui large top fixed hidden menu">
    <div class="ui container">
      <a href="<?= $this->url('index'); ?>" class="item">AirKolis</a>
      <a href="<?= $this->url('commentcamarche'); ?>" class="item">Comment ça marche ? </a>
      <a href="<?= $this->url('expedier'); ?>" class="item"> Expédier</a>
      <a href="<?= $this->url('proposer'); ?>" class="item">Proposer</a>
      <a href="<?= $this->url('liste_colis'); ?>" class="item">Liste des colis</a>
      <a href="<?= $this->url('liste_trajets'); ?>" class="item">Liste des trajets</a>
      <div class="right menu">
         <a href="<?= $this->url('moncompte'); ?>" class="item">mon compte </a>
        <div class="item">
        <?php if(!isset($_SESSION['user'])):?>
          <a class="item" href="<?= $this->url('connexion'); ?>" class="ui button">Connexion</a>
           <div class="item">
          <a  href="<?= $this->url('inscription'); ?>" class="ui primary button">Inscription</a>
        </div>
        <?php else:?>
          <a href="<?= $this->url('deconnexion'); ?>" class="item">Deconnexion</a>
        <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Sidebar Menu -->
  <div class="ui vertical inverted sidebar menu">
   <a href="<?= $this->url('index'); ?>" class="item">AirKolis</a>
   <a href="<?= $this->url('commentcamarche'); ?>" class="item">Comment ça marche ? </a>
   <a href="<?= $this->url('expedier'); ?>" class="item">Expédier</a>
   <a href="<?= $this->url('proposer'); ?>" class="item">Proposer</a>
   <a href="<?= $this->url('liste_colis'); ?>" class="item">Liste des colis</a>
   <a href="<?= $this->url('liste_trajets'); ?>" class="item">Liste des trajets</a>
    <a href="<?= $this->url('moncompte'); ?>" class="item">mon compte </a>
   <?php if(!isset($_SESSION['user'])):?>
          <a class="item" href="<?= $this->url('connexion'); ?>" class="ui button">Connexion</a>
     <a href="<?= $this->url('inscription'); ?>" class=" item">Inscription</a>
        <?php else:?>
          <a href="<?= $this->url('deconnexion'); ?>" class="item">Deconnexion</a>
        <?php endif ?>
   
 </div>
    <!-- Page Contents -->
    <div class="pusher">
  <div class="ui vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a href="<?= $this->url('index'); ?>" class="item">AirKolis</a>
        <a href="<?= $this->url('commentcamarche'); ?>" class="item">Comment ça marche ? </a>
        <a href="<?= $this->url('expedier'); ?>" class="item">Expédier</a>
        <a href="<?= $this->url('proposer'); ?>" class="item">Proposer</a>
        <a href="<?= $this->url('liste_colis'); ?>" class="item">Liste des colis</a>
        <a href="<?= $this->url('liste_trajets'); ?>" class="item">Liste des trajets</a>
        <div class="right item">
            <a href="<?= $this->url('moncompte'); ?>" class="item ">mon compte </a>
           <?php if(!isset($_SESSION['user'])):?>
          <a class="item" href="<?= $this->url('connexion'); ?>" class="ui button">Connexion</a>
          <a href="<?= $this->url('inscription'); ?>" class=" item">Inscription</a>
        <?php else:?>
          <a href="<?= $this->url('deconnexion'); ?>" class="item">Deconnexion</a>
        <?php endif ?>
        </div>
      </div>
    </div>

    </div>


      <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
          <div class="row">

            <?= $this->section('main_content') ?>

    </div>
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="twelve wide column"></div>
          <div class="ui inverted header">
          <div class="ui inverted link list">
           <a href="<?= $this->url('liste_colis'); ?>" class=" item">Liste des colis</a>
            <a href="<?=$this->url('conditionsgenerales');?>" class="item">conditions générales</a>
            <a href="#" class="item">Nous contacter</a>
            <a href="#" class="item">Commentaires</a>
            <a href="http://www.taillecabine.com/compagnies/taille-bagages-cabine.php" class="item">taille-bagages</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  Copyright Aymeric Notta 2017.Tous droits réservés.
</div>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.js"></script>
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

<?= $this->section('javascript') ?>
</body>

</html>
