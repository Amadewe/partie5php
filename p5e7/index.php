<?php
$department = array(
  // tableau associatif
  // l'index est représenté par les chiffres du département et la valeur par leur nom.
  // on met la valeur entre quote car c'est une chaine de caractère
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Sommes',
  02 => 'Aisne',
);
//     Note: Si vous utilisez la fonction array_push() pour ajouter un élément à un tableau,
// il est préférable de la remplacer par l'opérateur $array[] = qui évite le passage par une fonction.
$department[51] = 'La Marne';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7 partie 5</title>
  </head>
  <body>
    <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
    <p>Résultat : <?php print_r($department);?></p>
  </body>
</html>
