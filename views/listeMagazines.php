<?php $titre = 'Liste de nos magazines';?>

<head>
    <title>Liste de nos magazines</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/css/listeMagazines.css">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="list-mag-body">
        <div class="contenu">
            <h2 class="clr">Liste de nos magazines</h2>
            <ul>
                <?php foreach ($magazines as $magazine) {?>
                    <li>
                        <div class="line">
                            <div class="titleCase"> <?= $magazine->titre ?> </div>
                            <div class="iconCase"> <i class="fa fa-eye clr" aria-hidden="true"></i> </div>
                            <div class="iconCase"> <i style="color: crimson" class="fa fa-times" aria-hidden="true"></i> </div>
                        </div>
                    </li>
            <?php foreach ($magazines as $magazine) {?>
                <ul>
                    <table>
                        <thead>
                        <tr>
                            <th colspan="2"><?= $magazine->titre ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Référence</td>
                            <td><?= $magazine->reference ?></td>
                        </tr>
                        <tr>
                            <td>Titre</td>
                            <td><?= $magazine->titre ?></td>
                        </tr>
                        <tr>
                            <td>Année de publication</td>
                            <td><?= $magazine->anneePublication ?></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td><?= $magazine->typeMagazine?></td>
                        </tr>
                        </tbody>
                    </table>
                    <li><a href="?page=magazine&action=consulter&reference=<?= $magazine->reference?>"><input value="Modifier" type="button"></a></li>
                    <li><input type="button" onclick="supprimerMagazine(<?= $magazine->reference?>)" value="Supprimer"></li>
                </ul>

                <?php } ?>
            </ul>
        </div>
    </div>
</div>
</body>

            <a href="?page=magazine&action=ajouter""><input value="Ajouter un magazine" type="button"></a>
        </div>
    </div>
</div>
</body>

</html>

<script>
    function supprimerMagazine($reference){
        document.location = "?page=magazine&action=supprimer&reference=" + $reference;
    }
</script>
