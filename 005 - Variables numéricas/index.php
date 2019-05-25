<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Variables numéricas</title>
  </head>
  <body>
    <h1>Variables numéricas</h1>
    <!-- APERTURA PHP -->
    <?php
      // DECLARAR VARIABLES
      $x = 3;
      $y = 5;
      $suma = $x + $y;
      $resta = $x - $y;
      $multi = $x * $y;
      $divis = $x / $y;

      // HEREDOCS
      print <<< HERE
      <p>$x + $y = $suma.</p>
      <p>$x - $y = $resta.</p>
      <p>$x * $y = $multi.</p>
      <p>$x / $y = $divis.</p>
HERE;
    ?>
  </body>
</html>
