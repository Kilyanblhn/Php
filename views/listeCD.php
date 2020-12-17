<head>
    <title>Liste de nos CDs</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/css/style.css">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="list-mag-body">
        <div class="contenu">
            <h2 class="clr">Liste de nos CDs</h2>
            <a href="?page=cd&action=ajouter""> <i class="fa fa-plus clr" aria-hidden="true"></i> Ajouter </a>
            <div>
                <table>
                    <thead>
                    <tr>
                        <th> Référence</th>
                        <th> Titre</th>
                        <th> Artiste</th>
                        <th> Genre</th>
                        <th> Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cds as $cd) { ?>
                        <tr>
                            <td><?= $cd->reference ?></td>
                            <td><?= $cd->titre ?></td>
                            <td><?= $cd->artiste ?></td>
                            <td><?= $cd->genre ?></td>
                            <td class="action">
                                <div>
                                    <a href="?page=cd&action=consulter&reference=<?= $cd->reference ?>">
                                        <i class="fa fa-eye clr" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div>
                                    <i onclick="supprimerCD(<?= $cd->reference ?>)" style="color: crimson" class="fa fa-times" aria-hidden="true"></i>
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
    function supprimerCD($reference) {
        document.location = "?page=cd&action=supprimer&reference=" + $reference;
    }
</script>
