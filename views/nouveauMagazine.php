<!DOCTYPE html>
<html>

<head>
    <title>Nouveau magazine</title>
    <meta charset="utf-8">
</head>

<body>
<div>
    <div>
        <?php include('views/entete.php'); ?>
    </div>
    <div class="body">
        <div class="contenu">
            <h2>Ajouter un magazine à la bbliothèque</h2>
            <form action="?page=magazine&action=creer" method="post">
                <table>
                    <thead>
                    <tr>
                        <th colspan="2">Informations</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><label for="titre">Titre</label></td>
                        <td><input type="text" name="titre" id="titre" value="<?= isset($_SESSION["titreMagazine"]) ? $_SESSION["titreMagazine"] : '' ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="anneePublication">Année de publication</label></td>
                        <td><input type="number" name="anneePublication" id="anneePublication" value="<?= isset($_SESSION["anneePublication"]) ? $_SESSION["anneePublication"] : '' ?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="type">Type</label></td>
                        <td><input type="text" name="typeMagazine" id="typeMagazine" value="<?= isset($_SESSION["typeMagazine"]) ? $_SESSION["typeMagazine"] : '' ?>" required></td>
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

