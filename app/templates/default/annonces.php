<?php $this->layout('layout') ?>

<?php $this->start('main_content') ?>

<?php foreach( $colis as $colis): ?>

		
		<div class="ui celled list">
  <div class="item">
    
    <div class="content">
      <div class="header">
		  <a href="<?= $this->url("detail", ['id'=>$colis['id']]) ?>">
			<div class="description"><?= substr($this->e($colis['description']), 0, 20) ?>...</div>
		  
		</div>
    </div>
  </div>
</div>

	<?php endforeach ?>

<?php $this->stop('main_content') ?>