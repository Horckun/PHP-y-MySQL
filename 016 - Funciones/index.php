<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <body>
    <h1>Funciones</h1>
    <hr>
    <!-- PHP -->
    <?php
      // Llamar a funciones
      titulo();
      parrafo();

      // Crear funciones
      function titulo() {
        print <<< HERE
        <h2>Lorem Ipsum</h2>
HERE;
      }

      function parrafo() {
        print <<< HERE
        <p style="width: 30%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
HERE;
      }
    ?>
  </body>
</html>
