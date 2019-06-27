<!-- USAR VARIABLE DE SESIÓN -->
<?php session_start() ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Almacenar dato en cookie</title>
  </head>
  <body>
    <h1>Almacenar dato en cookie</h1>
    <!-- FORMULARIO -->
    <form style="width:30%;" action="" method="post">
      <!-- PHP -->
      <?php
        // COMPROBAR CONTADOR
        if(isset($_SESSION["contador"])) {
          $contador = $_SESSION["contador"];
        } else {
          $contador = 0;
        }
        // Incrementar valores
        $contador++;
        // Almacenar dato en contador
        $_SESSION["contador"] = $contador;
        // PRINTHERE
        print <<< HERE
          <fieldset>
            <input type="text" name="contador" value="$contador">
          </fieldset>
          <hr>
          <input type="submit" name="enviar" value="Incrementar">
HERE;
      ?>
    </form>
  </body>
</html>
