<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 partie 6 php</title>
    </head>
    <body>
        <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
        <p>
          <!--isset() est une fonction qui teste si une variable existe. -->  
            <?php
            
            if (isset($_GET['age'])) {
                echo $_GET['age'];
            } else {
                echo $_GET['lastname'] . ' ' . $_GET['firstname'];
            }
            ?>
        </p>
    </body>
</html>
