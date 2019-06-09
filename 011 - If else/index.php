<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Números aleatorios</title>
  </head>
  <body>
    <h1>Números aleatorios</h1>
    <!-- CÓDIGO PHP -->
    <?php
      // DECLARAR VARIABLE ALEATORIA
      $aleatorio = rand(1,6);

      // HEREDOCS
      print <<<HERE
      <p>Has sacado $aleatorio.</p>
      <p><img src="img/$aleatorio.png"></p>
HERE;

      /* if (condition) {
          // code...
        } else {
            // code...
          }*/

      if($aleatorio == 6) {
        print "<h2>¡¡¡Enhorabuena!!!</h2>";
      } else {
        print "<h2>¡¡¡Has fallado!!!</h2>";
      }

      // == IGUAL A | < MENOR QUE | > MAYOR QUE | <= MENOR O IGUAL QUE | >= MAYOR O IGUAL QUE | != DISTINTO DE
    ?>
  </body>
</html>
