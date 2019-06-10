<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>If else anidados</title>
  </head>
  <body>
    <h1>If else anidados</h1>
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

      if($aleatorio == 1) {
        print "<h2>¡¡¡Te queda mucho!!!</h2";
      } else {
        if($aleatorio == 2) {
          print "<h2>¡¡¡Aún te queda!!!</h2>";
        } else {
          if($aleatorio == 3) {
            print "<h2>¡¡¡Vas por la mitad!!!</h2>";
          } else {
            if($aleatorio == 4) {
              print "<h2>¡¡¡Ya te queda poco!!!</h2>";
            } else {
              if($aleatorio == 5) {
                print "<h2>¡¡¡Uno más!!!</h2>";
              }
            }
          }
        }
      }

      // == IGUAL A | < MENOR QUE | > MAYOR QUE | <= MENOR O IGUAL QUE | >= MAYOR O IGUAL QUE | != DISTINTO DE
    ?>
  </body>
</html>
