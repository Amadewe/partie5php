<?php
$departments = array (
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
    <title>Exercice 9 partie 5</title>
  </head>
  <body>
<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
<!--foreach est une sorte de boucle for mais spécialisée dans les tableaux.
foreach va passer en revue chaque ligne du tableau, et lors de chaque passage,
elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple $element).  -->
<?php foreach ($departments as $department){ ?>
  <p><?= $department; ?></p>
<?php } ?>

  </body>
</html>
