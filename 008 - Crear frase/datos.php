<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear frase</title>
  </head>
  <body>
    <h1>Crear frase</h1>
    <!-- CÓDIGO PHP -->
    <?php
      // COGER DATOS DEL FORMULARIO
      $nombre = filter_input(INPUT_POST, "nombre");
      $color = filter_input(INPUT_POST, "color");
      $edad = filter_input(INPUT_POST, "edad");
      $animal = filter_input(INPUT_POST, "animal");
      $lugar = filter_input(INPUT_POST, "lugar");

      // HEREDOCS
      print <<<HERE
      <p>$nombre es un $animal $color, tiene $edad años y vive en $lugar.</p>
HERE;
    ?>
  </body>
</html>
