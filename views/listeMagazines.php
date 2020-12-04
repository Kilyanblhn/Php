<!DOCTYPE html>
<html>

<head>
    <title>Liste de nos magazines</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/css/listeMagazines.css">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="body">
        <div class="contenu">
            <h2>Liste de nos magazines</h2>
            <ul>
                <?php foreach ($magazines as $magazine) {?>
                    <li>
                        <div class="line">
                            <div class="titleCase"> <?= $magazine->titre ?> </div>
                            <div class="iconCase"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                            <div class="iconCase"> <i class="fa fa-times" aria-hidden="true"></i> </div>
                        </div>
                    </li>

                <?php } ?>
            </ul>
        </div>
    </div>
</div>
</body>

</html>
