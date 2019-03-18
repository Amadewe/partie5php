<?php
// nous utilisons un tableau dit numéroté
// Pour créer un tableau numéroté en PHP, on utilise généralement la fonction array.
$month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8 partie 5 php</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
    <!--La boucle for permet de parcourir un tableau numéroté.
    En effet, puisqu'il est numéroté à partir de 0, on peut faire une boucle for qui incrémente un compteur à partir de 0 :  -->
<?php for ($numero = 0; $numero < 12; $numero++) { ?>
    <p><?= $month[$numero]; ?></p>
<?php } ?>
  </body>
</html>
