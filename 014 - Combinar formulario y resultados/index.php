<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Combinar formulario y resultados</title>
  </head>
  <body>
    <h1>Combinar formulario y resultados</h1>
    <!-- PHP -->
    <?php
      // COMPROBAMOS EXISTENCIA DE FORMULARIO
      if(filter_has_var(INPUT_POST, "nombre")) {
        // DECLARAR VARIABLES
        $nombre = filter_input(INPUT_POST, "nombre");
        print "<h2>Hola $nombre!</h2>";
      } else {
        // CREAR FORMULARIO
        print <<< HERE
          <form action="" method="post" style="width: 30%;">
            <fieldset>
              <label>Nombre: </label>
              <input type="text" name="nombre" value="" autofocus required>
              <hr>
              <input type="submit" name="enviar" value="Enviar">
            </fieldset>
          </form>
HERE;
      }
    ?>
  </body>
</html>
