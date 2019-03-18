<?php
// nous utilisons un tableau dit numéroté
// Pour créer un tableau numéroté en PHP, on utilise généralement la fonction array.
$month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
$key = array_search('aout', $month);
// array_splice est une fonction qui permet de supprimer et de remplacer un ou des élements dans le tableau
// Dans notre tableau $month on va à l'index 7 qui correspond au mois d'aout,
// le 1 permet de dire que l'on modifie un index à partir du 7eme index
// on met ensuite le mot qu'on veut rajouter içi août avec un accent
array_splice($month, 7, 1, 'août');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4 partie 5 php</title>
  </head>
  <body>
<p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
<p> l'index du mois d'Août : <?= $key ?></p>
<p>Résultat : <?= $month[7]?></p>
  </body>
</html>
