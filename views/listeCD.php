<!DOCTYPE html>
<html>

<head>
    <title>Liste de nos CDs</title>
    <meta charset="utf-8">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="body">
        <div class="contenu">
            <h2>Liste de nos CDs</h2>

            <?php foreach ($cds as $cd) {?>
                <ul>
                    <li><?= $cd->titre ?></li>
                </ul>

            <?php } ?>
        </div>
    </div>
</div>
</body>

</html>
