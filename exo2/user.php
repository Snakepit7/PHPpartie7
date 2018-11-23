<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Exo2</title>
  </head>
  <body>
      <div class="background">
          <h1 class="text">PHP partie 7 - Exo 2 :</h1>
      </div>
      <?php
       //Méthode POST
       echo (isset($_POST['lastName']) ? htmlentities($_POST['lastName']) : 'Le nom est introuvable') . ' '; 
       echo (isset($_POST['firstName']) ? htmlentities($_POST['firstName']) : 'Le prénom est introuvable');
      ?>
  </body>
</html>