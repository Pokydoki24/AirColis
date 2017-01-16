<?php
    $titre = "Détail de l'annonce";
?>

<h3><?= $annonce['titre'] ?></h3>


<?php $this->layout('layout'); ?>


<?php $this->start('main_content') ?>
<ul>
    <?php foreach($annonces as $annonce): ?>
    <li>
        <a href="<?= $this->url('article_details', ['id' => $postId]) ?>">Détails de l'annonce</a>
        </a>
    </li>
    <?php endforeach ?>
</ul>
<?php $this->stop('main_content') ?>