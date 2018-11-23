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
      <!-- Formulaire avec post -->
      <form method="post" action="user.php">
          <label for="lastName"> Nom : </label>
          <input type="text" name="lastName" />
          <label for="fisrtName"> Prénom : </label>
          <input type="text" name="firstName" />
          <input type="submit" value="Envoyer !" />
      </form>
  </body>
</html>