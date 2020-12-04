<?php $titre = 'Liste de nos CDs';?>

<h2>Liste de nos CDs</h2>

<?php foreach ($cds as $cd) {?>
    <ul>
        <li><?= $cd->titre ?></li>
    </ul>

<?php } ?>

<?php require('views/pages.php'); ?>
