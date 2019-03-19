<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 partie 6 php</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
        <p>
            <?php
            if (isset($_GET['startDate']) && ($_GET['endDate'])) {
                echo $_GET['startDate'] . ' ' . $_GET['endDate'];
            } else {
                echo 'Les paramètres n\'existent pas';
            }
            ?>
        </p>
    </body>
</html>
