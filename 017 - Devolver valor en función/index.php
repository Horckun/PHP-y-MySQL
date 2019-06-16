<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Devolver valor en función</title>
  </head>
  <body>
    <h1>Devolver valor en función</h1>
    <!-- PHP -->
    <?php
      // VALOR ALEATORIO
      $aleatorio = rand(0,100);

      // CREAR FUNCIÓN
      function funcion($aleatorio) {
        print "<h2>Esta aplicación la ha visto $aleatorio personas.</h2>";
      }

      // LLAMAR A FUNCIÓN
      funcion($aleatorio);
    ?>
  </body>
</html>
