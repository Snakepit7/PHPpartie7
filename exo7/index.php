<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Exo7</title>
  </head>
  <body>
      <div class="background">
          <h1 class="text">PHP partie 7 - Exo 7 :</h1>
      </div>
      <!-- Création du formulaire qui renvoie vers index.php -->
      <?php
      //Si civi, lastName et fisrtName est rempli...
        if(!isset($_POST['civi']) && !isset($_POST['lastName']) && !isset($_POST['firstName']) && !isset($_POST['fileButton'])){
      ?>
      <form method="post" action="index.php" enctype="multipart/form-data">
          <label for="civi"> Civilité: </label>
          <!-- Menu déroulant -->
          <select name="civi" size="1">
              <option> Mr.</option>
              <option> Mme.</option>
              <option> Mlle.</option>
          </select><br />
          <label for="lastName"> Nom : </label>
          <input type="text" name="lastName" required/><br />
          <label for="fisrtName"> Prénom : </label>
          <input type="text" name="firstName" required/><br />
          <!-- boutton "file" pour envoyer des fichiers -->
          <input type="file" name="fileButton" required/><br />
          <input type="submit" value="Envoyer !" />
      </form>
      <?php
        }else{
            //... Affiche l'echo
            echo 'Bonjour '. $_POST['civi'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'] . ' votre fichier est ' . $_POST['fileButton'];
        }
      ?>
  </body>
</html>