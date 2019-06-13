<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responder a casillas de verificación</title>
  </head>
  <body>
    <h1>Responder a casillas de verificación</h1>
    <!-- PHP -->
    <?php
      // BUCLE IF
      /* if (condition) {
        // code...
      } */

      if(filter_has_var(INPUT_POST, "azul")) {
        print "<h2>Has elegido azul.</h2>";
      }
      if(filter_has_var(INPUT_POST, "blanco")) {
        print "<h2>Has elegido blanco.</h2>";
      }
      if(filter_has_var(INPUT_POST, "negro")) {
        print "<h2>Has elegido negro.</h2>";
      }
      if(filter_has_var(INPUT_POST, "naranja")) {
        print "<h2>Has elegido naranja.</h2>";
      }
    ?>
  </body>
</html>
