<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Matriz en formulario</title>
  </head>
  <body>
    <h1>Matriz en formulario</h1>
    <!-- FORMULARIO -->
    <form style="width: 30%; border: 1px solid black; padding: 1%;" action="datos.php" method="post">
      <!-- MARCO -->
      <fieldset>
        <!-- LEYENDA -->
        <legend>Leer colores</legend>
        <?php
          // DECLARAR VARIABLES Y ASIGNAR VALORES
          $formulario = filter_input_array(INPUT_POST);
          $color = $formulario["color"];

          // LEER MATRIZ CON BUCLE
          for($i = 0; $i < count($color); $i++) {
            print "<input type='text' name='color[0]' value='$color[$i]'><br>";
          }
        ?>
      </fieldset>
    </form>
  </body>
</html>
