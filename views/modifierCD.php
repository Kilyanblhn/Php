<!DOCTYPE html>
<html>

<head>
    <title>Modifications</title>
    <meta charset="utf-8">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="body">
        <div class="contenu">
            <h2>Modifier le magazine</h2>
            <form action="?page=cd&action=modifier" method="post">
                <table>
                    <thead>
                    <tr>
                        <th colspan="2"><?= $cd->titre ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><label for="reference">Référence</label></td>
                        <td><input type="number" name="reference" value="<?= $cd->reference ?>" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="titre">Titre</label></td>
                        <td><input type="text" name="titre" id="titre" value="<?= $cd->titre ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="artiste">Artiste</label></td>
                        <td><input type="number" name="genre" id="genre" value="<?= $cd->artiste ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="genre">Genre</label></td>
                        <td><input type="text" name="genre" id="genre" value="<?= $cd->genre ?>" required></td>
                    </tr>
                    <tr>
                        <input type="checkbox" id="estEmprunte" name="estEmprunte">
                        <label for="estEmprunte">Emprunté</label>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" value="Sauvegarder">
            </form>
        </div>
    </div>
</div>
</body>

</html>

