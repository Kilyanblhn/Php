<?php $titre = 'Liste de nos magazines'; ?>

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
            <h2 class="clr">Liste de nos magazines </h2>
            <a href="?page=magazine&action=ajouter""> <i class="fa fa-plus clr" aria-hidden="true"></i> Ajouter </a>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th> Référence</th>
                            <th> Titre</th>
                            <th> Année</th>
                            <th> Type</th>
                            <th> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($magazines as $magazine) { ?>
                            <tr>
                                <td><?= $magazine->reference ?></td>
                                <td><?= $magazine->titre ?></td>
                                <td><?= $magazine->anneePublication ?></td>
                                <td><?= $magazine->typeMagazine ?></td>
                                <td class="action">
                                    <div>
                                        <a href="?page=magazine&action=consulter&reference=<?= $magazine->reference ?>">
                                            <i class="fa fa-eye clr" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <i onclick="supprimerMagazine(<?= $magazine->reference ?>)" style="color: crimson" class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

</body>

</html>

<script>
    function supprimerMagazine($reference) {
        document.location = "?page=magazine&action=supprimer&reference=" + $reference;
    }
</script>
