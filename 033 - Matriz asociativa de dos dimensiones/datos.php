<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Matriz multidimensional</title>
  </head>
  <body>
    <h1>Matriz multidimensional</h1>
    <!-- FORMULARIO -->
    <form style="width: 30%;" action="datos.php" method="post">
      <?php
        // Guardar datos en variables
        $primero = filter_input(INPUT_POST,"primero");
        $segundo = filter_input(INPUT_POST,"segundo");
        $numeros = array("A","B","C","D","E");
        $letra1 = $numeros[$primero];
        $letra2 = $numeros[$segundo];
        $a = array("A" => 4, "B" => 3, "C" => 8, "D" => 9, "E" => 1);
        $b = array("A" => 1, "B" => 3, "C" => 4, "D" => 6, "E" => 7);
        $c = array("A" => 0, "B" => 3, "C" => 8, "D" => 9, "E" => 1);
        $d = array("A" => 2, "B" => 3, "C" => 8, "D" => 9, "E" => 1);
        $e = array("A" => 3, "B" => 6, "C" => 8, "D" => 9, "E" => 1);
        $multi = array("A" => $a, "B" => $b, "C" => $c, "D" => $d, "E" => $e);
        $resultado = $multi[$letra1][$letra2];
      ?>
      <!-- SOLICITAR DOS VALORES ALFABÉTICOS -->
      <label>Primera letra</label> <?php print "$letra1."; ?>
      <br>
      <label>Segunda letra</label> <?php print "$letra2."; ?>
      <hr>
      <p><?php print "El resultado de $letra1 x $letra2 es $resultado."; ?></p>
    </form>
  </body>
</html>
