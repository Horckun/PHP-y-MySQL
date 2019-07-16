<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver archivos</title>
  </head>
  <body style="width: 30%;">
    <h1>Ver archivos</h1>
    <!-- FORMULARIO PARA VER ARCHIVOS -->
    <?php
      // Recuperar variables
      $nombreArchivo = filter_input(INPUT_POST,"seleccion");
      $contrasena = filter_input(INPUT_POST,"contrasena");
      $contenido = filter_input(INPUT_POST,"contenido");
      $abrir = file($nombreArchivo);
      // BUCLE FOREACH
      foreach ($abrir as $texto) {
      }
      // Comprobar contraseña
      if($contrasena != "ver") {
        print "<h2>No tienes acceso a este archivo.</h2>";
        print "<a href='./'>Volver</a>";
      } else {
        // Declarar variable
        $archivo = fopen($nombreArchivo,"r");
        // Imprimir en pantalla
        print <<<HERE
          <form class="" action="" method="">
            <fieldset>
              <label>Nombre de archivo: </label>
              <input type="text" name="nombreArchivo" value="$nombreArchivo" readonly>
              <br><br>
              <label>Contenido: </label>
              <textarea name="contenido" rows="8" cols="80" readonly>$texto</textarea>
            </fieldset>
          </form>
HERE;
        fclose($archivo);
        print "<a href='./'>Volver</a>";
      }
    ?>
  </body>
</html>
