<?php
$numberDepFrance = array (
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo-9 Partie-V</title>
  </head>
  <body>
    <?php foreach ($numberDepFrance as $key => $element) { ?>
     <p><?= $element . ': ' . $key . ' ';?></p>
    <?php } ?>
  </body>
</html>
