<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trabajar con texto plano</title>
  </head>
  <body>
    <h1>Trabajar con texto plano</h1>
    <!-- PHP -->
    <?php
      // Abrir archivo
      $archivo = file("archivo.txt");

      if(!$archivo) {
        print "No se ha podido abrir el archivo.";
      } else {
        // Coger datos del archivo
        foreach ($archivo as $linea) {
          // Eliminar espacios
          $linea = rtrim($linea);

          // Coger de cada linea el nombre y correo y cortarlo
          list($nombre,$correo) = explode(" - ",$linea);

          // Generar mensaje
          $mensaje = <<<HERE
          <p>A: $correo.</p>
          <p>Sr/a $nombre,</p>
          <p>Gracias por visitar nuestro espacio web y por visitarnos en las redes sociales.</p>
          <p>Un saludo,
          <br>
          Horckun.</p>
HERE;

          // Imprimir mensaje
          print "$mensaje";
        }
      }
    ?>
  </body>
</html>
