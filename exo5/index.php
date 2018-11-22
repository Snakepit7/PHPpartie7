<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Exo5</title>
  </head>
  <body>
      <div class="background">
          <h1 class="text">PHP partie 7 - Exo 5 :</h1>
      </div>
      <!-- Création du formulaire qui renvoie vers index.php -->
      <form method="post" action="index.php">
          <label for="civi"> Civilité: </label>
          <!-- Menu déroulant -->
          <select name="civi" size="1">
              <option> Mr.</option>
              <option> Mme.</option>
              <option> Mlle.</option>
          </select><br />
          <label for="lastName"> Nom : </label>
          <input type="text" name="lastName" /><br />
          <label for="fisrtName"> Prénom : </label>
          <input type="text" name="firstName" /><br />
          <input type="submit" value="Envoyer !" />
      </form>
      <?php
      
      ?>
  </body>
</html>