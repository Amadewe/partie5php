<?php
// nous utilisons un tableau dit numéroté
// Pour créer un tableau numéroté en PHP, on utilise généralement la fonction array.
$month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 partie 5 php</title>
  </head>
  <body>
<p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
<!-- un tableau commence par 0, 0 représente donc janvier  -->
<p>la valeur de la troisième ligne est : <?= $month[2] ?></p>
  </body>
</html>
