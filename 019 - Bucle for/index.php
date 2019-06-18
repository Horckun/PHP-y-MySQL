<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bucle for</title>
  </head>
  <body>
    <h1>Bucle for</h1>
    <!-- PHP -->
    <?php
      /*for ($i=0; $i < ; $i++) {
          code...
        }*/
        for($i = 0; $i < 10; $i++) {
          // Declarar variable
          $rand = rand(0,100);

          // Mostrar en pantalla
          print "- $rand.<br>";
        }
    ?>
  </body>
</html>
