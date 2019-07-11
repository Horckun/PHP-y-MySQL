<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leer archivo en matriz</title>
  </head>
  <body style="width: 30%;">
    <h1>Leer archivo en matriz</h1>
    <!-- PHP -->
    <?php
      // DECLARAR VARIABLE
      $archivo = "archivo.txt";
      $abrir = file($archivo);

      // BUCLE FOREACH
      foreach ($abrir as $texto) {
        // IMPRIMIR EN PANTALLA
        print "$texto";
      }
    ?>
  </body>
</html>
