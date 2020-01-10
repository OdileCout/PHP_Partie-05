<?php
  $moths = array ('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo-8 Partie-V</title>
  </head>
  <body>
    <?php foreach ($moths as $key) { ?>
      <p><?= $key ?></p>
    <?php } ?>
  </body>
</html>
