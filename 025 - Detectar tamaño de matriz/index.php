<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detectar tamaño de matriz</title>
  </head>
  <body>
    <h1>Detectar tamaño de matriz</h1>
    <!-- PHP -->
    <?php
      // Declarar variable y asignarle valor
      $matriz = array(0,2,5,8);

      // Bucle for
      /*for ($i=0; $i < ; $i++) {
        code...
      }*/
      for($i = 0; $i < count($matriz); $i++) {
        print "- $matriz[$i] -";
      }
    ?>
  </body>
</html>
