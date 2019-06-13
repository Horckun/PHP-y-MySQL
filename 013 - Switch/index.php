<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Switch</title>
  </head>
  <body>
    <h1>Switch</h1>
    <!-- CÓDIGO PHP -->
    <?php
      // DECLARAR VARIABLE ALEATORIA
      $aleatorio = rand(1,6);

      // HEREDOCS
      print <<<HERE
      <p><img src="img/$aleatorio.png"></p>
HERE;

      /* switch (variable) {
        case 'value':
          // code...
          break;

        default:
          // code...
          break;
      }*/
      switch ($aleatorio) {
        case 1:
          $aleatorio = 'I';
          break;
        case 2:
          $aleatorio = 'II';
          break;
        case 3:
          $aleatorio = 'III';
          break;
        case 4:
          $aleatorio = 'IV';
          break;
        case 5:
          $aleatorio = 'V';
          break;
        case 6:
          $aleatorio = 'VI';
          break;
        default:
          print "<h2>El dado ha fallado.</h2>";
          break;
      }

      // HEREDOCS
      print <<<HERE
      <p>Has sacado $aleatorio.</p>
HERE;
    ?>
  </body>
</html>
