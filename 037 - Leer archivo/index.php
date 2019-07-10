<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leer archivo</title>
  </head>
  <body style="width: 30%;">
    <h1>Leer archivo</h1>
    <!-- PHP -->
    <?php
      // VARIABLE PARA ABRIR ARCHIVO
      $archivo = fopen("archivo.txt","r");

      // VER ARCHIVO EN PANTALLA
      while(!feof($archivo)) {
        // COGER TEXTO DEL ARCHIVO Y METERLO EN VARIABLE
        $texto = fgets($archivo);

        // IMPRIMIR TEXTO EN PANTALLA
        print "$texto";
      }

      // CERRAR ARCHIVO
      fclose($archivo);
    ?>
  </body>
</html>
