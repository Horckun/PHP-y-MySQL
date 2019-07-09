<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Escribir en archivo</title>
  </head>
  <body>
    <h1>Escribir en archivo</h1>
    <!-- PHP -->
    <?php
      // DECLARAR PRINTHERE
      $texto = <<<HERE
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
HERE;
      // VARIABLE PARA ABRIR ARCHIVO
      $archivo = fopen("archivo.txt","w");
      // INSERTAR TEXTO EN ARCHIVO
      fputs($archivo,$texto);
      // CERRAR ARCHIVO 
      fclose($archivo);
    ?>
  </body>
</html>
