<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 partie 6 php</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101</p>
        <p>
            <?php
            if (isset($_GET['building']) && ($_GET['room'])) {
                echo $_GET['building'] . ' ' . $_GET['room'];
            } else {
                echo 'Les paramètres n\'existent pas';
            }
            ?>
        </p>
    </body>
</html>