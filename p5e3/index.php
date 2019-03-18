<?php
// nous utilisons un tableau dit numéroté
// Pour créer un tableau numéroté en PHP, on utilise généralement la fonction array.
$month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 partie 5 php</title>
  </head>
  <body>
<p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
<!-- un tableau commence par 0, 0 représente donc janvier  -->
<p>la valeur de l'index 5 est : <?= $month[5]?></p>
  </body>
</html>
