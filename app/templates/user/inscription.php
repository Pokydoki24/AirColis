<?php $this->layout('layout') ?>

<?php $this->start('main_content') ?>


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
            <input type="text" name="[myform]nom" placeholder="Nom"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="[myform]prenom" placeholder="Prenom"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
           <i class="street view icon"></i>
            <input type="text" name="[myform]adresse" placeholder="adresse"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
          <i class="street view icon"></i>
            <input type="text" name="[myform]ville" placeholder="ville"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
           <i class="mobile icon"></i>
            <input type="text" name="[myform]telephone" placeholder="telephone"><br>
          </div>
        </div>
         <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" name="[myform]email" placeholder="email"><br>
          </div>
        </div>
        
        <div class="field">
          <div class="ui left icon input">
           <i class="lock icon"></i>
            <input type="text" name="[myform]login" placeholder="Login"><br>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="text" name="[myform]password" placeholder="Password"><br>
          </div>
        </div>
        <div class="ui  submit button">
          <input type="submit" name="valider" value="valider">
        </div>
      </div>

    </form>
<?php $this->stop('main_content') ?>