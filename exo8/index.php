<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Exo8</title>
  </head>
  <body>
      <div class="background">
          <h1 class="text">PHP partie 7 - Exo 8 :</h1>
      </div>
      <?php
        $civi = filter_input(INPUT_POST, 'civi');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $firstName = filter_input(INPUT_POST, 'firstName');
        if(isset($civi, $lastName, $firstName)){
            
            $file = $_FILES['fileButton']['name'];
        $extension = pathinfo($file) ['extension'];
        }
      //Si civi, lastName et fisrtName n'est pas rempli on affiche le formulaire
        if(!isset($civi) && !isset($lastName) && !isset($firstName) && !isset($file)){
      ?>
      <!-- Création du formulaire qui renvoie vers index.php -->
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
          <input type="text" name="firstName" required /><br />
          <!-- boutton "file" pour envoyer des fichiers -->
          <input type="file" name="fileButton" required/><br />
          <input type="submit" value="Envoyer !" />
      </form>
      <?php
        }else{
            //Sinon on affiche l'echo
            echo 'Bonjour '. $civi . ' ' . htmlspecialchars($lastName) . ' ' . htmlspecialchars($firstName) . ' votre fichier est ' . $file;
        }
        // Définition de l'extension acceptée dans le formulaire
        if(isset($extension)) {
        if ($extension == 'pdf') {
             $extension= false;
        } else {
            echo 'Seuls les fichiers pdf sont acceptés';
        }
        }
      ?>
  </body>
</html>