<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bucle while</title>
  </head>
  <body>
    <h1>Bucle while</h1>
    <!-- PHP -->
    <?php
      /*while ($a <= 10) {
        // code...
      }*/
      // Mientras que $a sea menor o igual a 10, se ejecuta el código

      // Declarar variable
      $i = 0;

      while($i <= 10) {
        // Declarar variable
        $rand = rand(0,100);

        // Mostrar en pantalla
        print "- $rand ";

        // A i le sumamos 1
        $i++;
      }
    ?>
  </body>
</html>
