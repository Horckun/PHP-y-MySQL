<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bucle foreach</title>
  </head>
  <body>
    <h1>Bucle foreach</h1>
    <!-- PHP -->
    <?php
      // Crear una lista
      $lista = array("azul","negro","blanco","naranja");

      // Imprimir lisa
      print "<ul>";
        /*foreach ($variable as $key => $value) {
          code...
        }*/
        foreach($lista as $valor) {
          print "<li>$valor</li>";
        }
      print "</ul>";
    ?>
  </body>
</html>
