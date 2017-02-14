<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>
        <H1 class="ui header">Connectez-vous à votre compte</H1>
<div class="ui middle aligned center aligned grid">
    <div class="column">
      
    </div>
    </div>
    <form class="ui large form" method="POST">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="myform[username]" placeholder="Login">
          </div>
        </div>
      </div>

      <div class="field">
        <div class="ui stacked segment">
        <div class="ui left icon input">
          <i class="lock icon"></i>
          <input type="password" name="myform[password]" placeholder="Password">
        </div>
      </div>

      <div class="ui fluid large submit button">
        <input type="submit" name="connexion" value="Connexion">
      </div>
    </div>
  </form>

  <?php $this->stop('main_content') ?>