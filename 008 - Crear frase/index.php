<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear frase</title>
  </head>
  <body>
    <h1>Crear frase</h1>
    <!-- ENVIAR DATOS DEL FORMULARIO A DATOS.PHP POR MÉTODO POST -->
    <form style="width: 20%;" action="datos.php" method="post">
      <fieldset>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="" autofocus required>
        <br><br>
        <label>Color: </label>
        <input type="text" name="color" value="" required>
        <br><br>
        <label>Edad: </label>
        <input type="number" name="edad" value="" required>
        <br><br>
        <label>Animal: </label>
        <input type="text" name="animal" value="" required>
        <br><br>
        <label>Lugar: </label>
        <input type="text" name="lugar" value="" required>
        <hr>
        <input type="submit" name="enviar" value="Enviar datos">
      </fieldset>
    </form>
  </body>
</html>
