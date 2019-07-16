<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar archivos</title>
  </head>
  <body style="width: 30%;">
    <h1>Editar archivos</h1>
    <!-- FORMULARIO PARA VER ARCHIVOS -->
    <?php
      // Recuperar variables
      $contenido = filter_input(INPUT_POST,"contenido");
      $nombreArchivo = filter_input(INPUT_POST,"nombreArchivo");

      // Editar archivo
      $archivo = fopen($nombreArchivo,"w");
      fputs($archivo,$contenido);
      fclose($archivo);
      print "<h2>Archivo editado correctamente.</h2>";
      print "<a href='./'>Volver</a>";
    ?>
  </body>
</html>
