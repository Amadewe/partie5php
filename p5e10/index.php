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
  <title>Exercice 10 partie 5</title>
</head>
<body>
  <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.</p>
  <p>Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</p>
  <!--  On peut récupèrer la valeur et la clé avec la boucle foreach -->
  <?php foreach($departments as $departmentNumber => $department) {?>
  <p>Le département : <?= $department ?> à le numéro : <?= $departmentNumber ?></p>
<?php } ?>
</body>
</html>
