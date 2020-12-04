<?php $titre = 'Liste de nos magazines';?>

<h2>Liste de nos magazines</h2>

<?php foreach ($magazines as $magazine) {?>
    <ul>
        <li><?= $magazine->titre ?></li>
    </ul>

<?php } ?>

<?php require('views/pages.php'); ?>
