<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>

<div class="ui middle aligned center aligned grid">
  <div class="column">
      <div class="content">
        <H2>Connectez-vous à votre compte</H2>
      </div>
    
    <form class="ui large form" method="GET" action="">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="myform[username]" placeholder="Login">
          </div>
        </div>
      </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="myform[password]" placeholder="Password">
          </div>
        </div>

        <div class="ui fluid large teal submit button">
          <input type="submit" name="connexion" value="Connexion">
        </div>
    </form>

<?php $this->stop('main_content') ?>