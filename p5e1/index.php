<?php
// nous utilisons un tableau dit numéroté
// Pour créer un tableau numéroté en PHP, on utilise généralement la fonction array.
$month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 partie 5 php</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
<p>Créer un tableau months et l'initialiser avec les valeurs suivantes :</p>
<ul>
    <li>janvier</li>
    <li>février</li>
    <li>mars</li>
    <li>avril</li>
    <li>mai</li>
    <li>juin</li>
    <li>juillet</li>
    <li>aout</li>
    <li>septembre</li>
    <li>octobre</li>
    <li>novembre</li>
    <li>décembre</li>
</ul>
<p>Résultat : <?php print_r($month);?></p>
  </body>
</html>
