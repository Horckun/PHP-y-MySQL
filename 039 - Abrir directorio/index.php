<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Abrir directorio</title>
  </head>
  <body>
    <h1>Abrir directorio</h1>
    <!-- PHP -->
    <?php
      // DECLARAR VARIABLE
      $directorio = "../";
      $abrir = opendir($directorio);
      $carpetas = "";

      // ABRIR DIRECTORIOS
      while(($carpetas = readdir($abrir)) !== false) {
        print "<a href='$directorio$carpetas'>$carpetas</a><br>";
      }
    ?>
  </body>
</html>
