<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Repetir frases</title>
  </head>
  <body>
    <h1>Repetir frases</h1>
    <!-- APERTURA PHP -->
    <?php
      // INSERTAR FRASES DENTRO DE VARIABLE
      $frases = <<<HERE
      <p>Hola mundo!</p>
      <p>Pero no hay queja del que deja y no se enoja por las tejas que caen del tejado agotadas por viejas.</p>
      <p>Be the change you want to see in the world.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
HERE;
// FIN DE LAS frases

// MOSTRAR FRASES EN PANTALLA 3 VECES
print "<h2>Frase 1</h2>";
print $frases;
print "<h2>Frase 2</h2>";
print $frases;
print "<h2>Frase 3</h2>";
print $frases;

// CIERRE PHP
    ?>
  </body>
</html>
