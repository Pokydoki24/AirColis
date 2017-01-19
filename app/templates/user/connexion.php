<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
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
            <input type="text" name="myform2[login]" placeholder="Login">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="myform2[password]" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">
          <input type="submit" name="connexion" value="Connexion">
        </div>
      </div>

</form>
<?php $this->stop('main_content') ?>