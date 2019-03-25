<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 partie 6 php</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?week=12</p>
        <p>
            <?php
            if (isset($_GET['week'])) {
                echo $_GET['week'];
            } else {
                echo 'Les paramètres n\'existent pas';
            }
            ?>
        </p>
    </body>
</html>