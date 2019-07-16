<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver archivos</title>
  </head>
  <body style="width: 30%;">
    <h1>Ver archivos</h1>
    <!-- FORMULARIO PARA ELIMINAR ARCHIVOS -->
    <?php
      // Recuperar variables
      $nombreArchivo = filter_input(INPUT_POST,"seleccion");
      $contrasena = filter_input(INPUT_POST,"contrasena");

      // Comprobar contraseña
      if($contrasena != "eliminar") {
        print "<h2>No tienes acceso a este archivo.</h2>";
        print "<a href='./'>Volver</a>";
      } else {
        // Declarar variable
        unlink($nombreArchivo);
        // Imprimir en pantalla
        print "<h2>Archivo eliminado correctamente.</h2>";
        print "<a href='./'>Volver</a>";
      }
    ?>
  </body>
</html>
