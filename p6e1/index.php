<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 partie 6 php</title>
  </head>
  <body>
<p>Faire une page index.php.</p>
<p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
<!-- :$_GET. Il s'agit d'un array associatif, dont les clés correspondent aux noms des paramètres envoyés en URL. -->
<p><?= $_GET['lastname'] . ' ' . $_GET['firstname']; ?> !</p>
  </body>
</html>
