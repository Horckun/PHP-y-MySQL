<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leer datos de formulario</title>
  </head>
  <body>
    <h1>Leer datos de formulario</h1>
    <!-- FORMULARIO -->
    <form style="width: 30%; border: 1px solid black; padding: 1%;" action="datos.php" method="post">
      <fieldset>
        <legend>Datos personales</legend>
        <label>Nombre: </label>
        <?php
          $nombre = $_REQUEST["nombre"];
          print "$nombre.";
        ?>
        <br><br>
        <label>Correo electrónico: </label>
        <?php
          $email = $_REQUEST["email"];
          print "$email.";
        ?>
      </fieldset>
      <fieldset>
        <legend>Comentario</legend>
        <?php
          $comentario = $_REQUEST["comentario"];
        ?>
        <textarea name="comentario" rows="8" cols="30%"><?php print "$comentario."; ?></textarea>
      </fieldset>
    </form>
  </body>
</html>
