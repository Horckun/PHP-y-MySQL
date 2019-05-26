<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Solicitar y mostrar dato de formulario</title>
  </head>
  <body style="width: 40%; margin: 0 auto; text-align: center;">
    <h1 style="text-align: center;">Solicitar y mostrar dato de formulario</h1>
    <!-- FORMULARIO - ENVIAR DATOS A DATO.PHP POR MÉTODO GET -->
    <form class="" action="dato.php" method="get" style="width: 40%; margin: 0 auto; background: #eee;">
      <fieldset>
        <label>Inserta tu nombre:</label>
        <br>
        <input type="text" name="nombre" value="" placeholder="Insertar nombre..." autofocus required>
        <hr>
        <input type="submit" name="enviar" value="Enviar formulario">
      </fieldset>
    </form>
    <!-- PHP - MOSTRAR LOS DATOS DEL FORMULARIO INDEX.PHP -->
    <?php
      // COGER VALOR DEL FORMULARIO
      $nombre = filter_input(INPUT_GET,"nombre");
      // MOSTRAR EN PANTALLA
      print "<h2>Hola $nombre!</h2>";
    ?>
  </body>
</html>
