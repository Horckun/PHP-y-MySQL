<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leer matrices en bucle</title>
  </head>
  <body>
    <h1>Leer matrices en bucle</h1>
    <!-- PHP -->
    <?php
      // Bucle for
      /*for ($i=0; $i < ; $i++) {
        code...
      }*/
      for($i = 0; $i <= 10; $i++) {
        // Asignamos valores a $matriz
        $matriz[$i] = rand(1,100);
        // Mostramos en pantalla el vaor de la matriz
        print "- $matriz[$i] -";
      }
    ?>
  </body>
</html>
