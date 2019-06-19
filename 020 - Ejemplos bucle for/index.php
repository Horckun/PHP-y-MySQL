<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejemplos bucle for</title>
  </head>
  <body>
    <h1>Ejemplos bucle for</h1>
    <!-- CÓDIGO PHP -->
    <?php
      /*for ($i=0; $i < ; $i++) {
        // code...
      }*/
      /* LA VARIABLE i ES IGUAL A 0, MIENTRAS QUE i SEA
      MENOR QUE EL VALOR QUE QUERAMOS, i SUMARA 1 PROGRESIVAMENTE*/

      print "<hr>";

      // FOR PROGRESIVO
      print "<h2>For progresivo</h2>";
      for ($i=0; $i <= 10; $i++) {
        print "- $i ";
      }

      print "<hr>";

      // FOR REGRESIVO
      print "<h2>For regresivo</h2>";
      for ($i=10; $i >= 0; $i--) {
        print "- $i ";
      }

      print "<hr>";

      // FOR +2
      print "<h2>For +2</h2>";
      for ($i=0; $i <= 10; $i+=2) {
        print "- $i ";
      }

      print "<hr>";
    ?>
  </body>
</html>
