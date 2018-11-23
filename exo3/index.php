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
      <!-- Formulaire avec methode get -->
      <form method="get" action="user.php">
          <label for="lastName"> Nom : </label>
          <input type="text" name="lastName" required/>
          <label for="fisrtName"> Prénom : </label>
          <input type="text" name="firstName" required/>
          <input type="submit" value="Envoyer !" />
      </form>
  </body>
</html>