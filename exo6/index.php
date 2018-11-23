<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Exo6</title>
  </head>
  <body>
      <div class="background">
          <h1 class="text">PHP partie 7 - Exo 6 :</h1>
      </div>
      <!-- Création du formulaire qui renvoie vers index.php -->
      <?php
      //Si civi, lastName et fisrtName est rempli...
        if(!isset($_POST['civi']) && !isset($_POST['lastName']) && !isset($_POST['firstName'])){
      ?>
      <form method="post" action="index.php">
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
          <input type="submit" value="Envoyer !" />
      </form>
      <?php
        }else{
            //... Affiche l'echo
            echo 'Bonjour '. $_POST['civi'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'];
        }
      ?>
  </body>
</html>