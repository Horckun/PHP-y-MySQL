<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clases</title>
  </head>
  <body>
    <?php
      // CREAR CLASE
      class Ejemplo {
        // DECLARAR VARIABLE DE CLASE
        var $nombre;
      }
      // CREAR INSTANCIA DE EJEMPLO
      $elEjemplo = new Ejemplo();
      // ASIGNAR VALOR A VARIABLE
      $elEjemplo->nombre = "Horckun";
      // IMPRIMIR EN PANTALLA
      print "<h1>$elEjemplo->nombre</h1>";
    ?>
  </body>
</html>
