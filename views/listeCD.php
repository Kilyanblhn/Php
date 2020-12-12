<!DOCTYPE html>
<html>

<head>
    <title>Liste de nos CDs</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/css/listeCd.css">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="list-cd-body">
        <div class="contenu">
            <h2 class="clr">Liste de nos CD</h2>

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
