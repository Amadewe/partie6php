<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 partie 6 php</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP</p>
        <p>
            <?php
            if (isset($_GET['language']) && ($_GET['server'])) {
                echo $_GET['language'] . ' ' . $_GET['server'];
            } else {
                echo 'Les paramètres n\'existent pas';
            }
            ?>
        </p>
    </body>
</html>