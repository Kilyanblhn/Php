<!DOCTYPE html>
<html>

<head>
    <title>Nouveau CD</title>
    <meta charset="utf-8">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="body">
        <div class="contenu">
            <h2>Ajouter un CD à la bbliothèque</h2>
            <form action="?page=cd&action=creer" method="post">
                <table>
                    <thead>
                    <tr>
                        <th colspan="2">Informations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><label for="titre">Titre</label></td>
                        <td><input type="text" name="titre" id="titre" value="<?= isset($_SESSION["titreCD"]) ? $_SESSION["titreCD"] : '' ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="artiste">Artiste</label></td>
                        <td><input type="text" name="artiste" id="artiste" value="<?= isset($_SESSION["artiste"]) ? $_SESSION["artiste"] : '' ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="genre">Genre</label></td>
                        <td><input type="text" name="genre" id="genre" value="<?= isset($_SESSION["genre"]) ? $_SESSION["genre"] : '' ?>" required></td>
                    </tr>
                    </tbody>
                </table>
                <div>
                    <input type="checkbox" id="estEmprunte" name="estEmprunte">
                    <label for="estEmprunte">Emprunté</label>
                </div>
                <input type="submit" value="Sauvegarder">
            </form>
        </div>
    </div>
</div>
</body>

</html>

