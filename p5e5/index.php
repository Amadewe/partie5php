<?php
$departments = array(
  // tableau associatif
  // l'index est représenté par les chiffres du département et la valeur par leur nom.
  // on met la valeur entre quote car c'est une chaine de caractère
  //Il faut mettre des quotes aux clés car sinon il n'affiche pas le
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
  '02' => 'Aisne',
)
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5 partie 5</title>
  </head>
  <body>
<p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
<!-- print_r est obsolète -->
<p>Résultat : <?php print_r($departments);?></p>
  </body>
</html>
