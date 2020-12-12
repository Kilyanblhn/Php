<!DOCTYPE html>
<html>

<head>
    <title>Liste de nos magazines</title>
    <meta charset="utf-8">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="body">
        <div class="contenu">
            <h2>Liste de nos magazines</h2>

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



