<?php
setlocale(LC_TIME, 'fr_FR.utf8', 'fra')
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <p class="date">
      <span id="blink">
      Nous sommes le <?php echo strftime('%A %e %B %Y'); ?>
  </span>
 </p>
   <script src="assets/js/script.js" charset="utf-8"></script>
  </body>
</html>
