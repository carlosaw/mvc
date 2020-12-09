<?php $render('header'); ?>
<hr />
Opa, <?= $nome; ?><br />
Eu tenho: <?php echo $idade ?> anos.

<hr />

<!-- Exibe os Posts-->
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['titulo']; ?></h3>
    <p><?php echo $post['corpo']; ?></p>
<?php endforeach; ?>