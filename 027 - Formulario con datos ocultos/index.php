<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario con datos ocultos</title>
  </head>
  <body>
    <h1>Formulario con datos ocultos</h1>
    <!-- FORMULARIO -->
    <form style="width:30%;" action="" method="post">
      <!-- PHP -->
      <?php
        // Cargar variables
        $contador = filter_input(INPUT_POST, "contador");
        $contadorOculto = filter_input(INPUT_POST, "contadorOculto");

        // Incrementar valores
        $contador++;
        $contadorOculto++;

        // PRINTHERE
        print <<< HERE
          <fieldset>
            <input type="text" name="contador" value="$contador">
            <input type="hidden" name="contadorOculto" value="$contadorOculto">
          </fieldset>
          <hr>
          <input type="submit" name="enviar" value="Incrementar">
HERE;
      ?>
    </form>
  </body>
</html>
