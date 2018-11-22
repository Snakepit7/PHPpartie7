<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Exo3</title>
  </head>
  <body>
      <div class="background">
          <h1 class="text">PHP partie 7 - Exo 3 :</h1>
      </div>
      <?php
       echo (isset($_GET['lastName']) ? htmlentities($_GET['lastName']) : 'Le nom est introuvable') . ' '; 
       echo (isset($_GET['firstName']) ? htmlentities($_GET['firstName']) : 'Le prénom est introuvable');
      ?>
  </body>
</html>