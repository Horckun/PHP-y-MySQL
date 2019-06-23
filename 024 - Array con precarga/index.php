<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array con precarga</title>
  </head>
  <body>
    <h1>Array con precarga</h1>
    <!-- PHP -->
    <?php
      // Declarar variable y asignar valor
      $array = array("Hola ","mundo","!");

      /* for ($i=0; $i < ; $i++) {
        code...
      }*/
      for($i = 0; $i < 3; $i++) {
        print "$array[$i]";
      }
    ?>
  </body>
</html>
