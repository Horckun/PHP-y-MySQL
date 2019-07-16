<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administrar archivos</title>
  </head>
  <body style="width: 30%;">
    <h1>Administrar archivos</h1>
    <!-- FORMULARIO PARA CREAR ARCHIVOS -->
    <form class="" action="crearArchivos.php" method="post">
      <fieldset>
        <legend>Crear archivos</legend>
        <label>Nombre de archivo: </label>
        <input type="text" name="nombreArchivo" value="">
        <br><br>
        <label>Contraseña: </label>
        <input type="password" name="contrasena" value="">
        <hr>
        <input type="submit" name="" value="Crear archivos">
      </fieldset>
    </form>
    <hr>
    <!-- FORMULARIO PARA VER ARCHIVOS -->
    <form class="" action="verArchivos.php" method="post">
      <fieldset>
        <legend>Ver archivos</legend>
        <?php
          // Declarar variables
          $directorio;
          $archivos;

          // Asignar valores
          $directorio = opendir("./");
          $archivo = readdir($directorio);

          // Listar directorio y archivos
          while($archivo !== false) {
            $archivos[] = $archivo;
            $archivo = readdir($directorio);
          }

          // Seleccionar archivos html
          $filtro = preg_grep("/dat$/",$archivos);

          // Generar cuadro de selección
          $seleccion = "<select name='seleccion'><br>";
          foreach ($filtro as $selector) {
            $base = substr($selector,0);
            $seleccion .= <<<HERE
              <option value="$base">$base</option>
HERE;
          }
          $seleccion .= "</select><br>";

          // Mostrar en pantalla
          print "<label>Seleccia archivo: </label>$seleccion<br>";
        ?>
        <label>Contraseña: </label>
        <input type="password" name="contrasena" value="">
        <hr>
        <input type="submit" name="" value="Ver archivos">
      </fieldset>
    </form>
    <hr>
    <!-- FORMULARIO PARA EDITAR ARCHIVOS -->
    <form class="" action="editarArchivos.php" method="post">
      <fieldset>
        <legend>Editar archivos</legend>
        <?php
          // Mostrar en pantalla
          print "<label>Seleccia archivo: </label>$seleccion<br>";
        ?>
        <label>Contraseña: </label>
        <input type="password" name="contrasena" value="">
        <hr>
        <input type="submit" name="" value="Editar archivos">
      </fieldset>
    </form>
    <hr>
    <!-- FORMULARIO PARA ELIMINAR ARCHIVOS -->
    <form class="" action="eliminarArchivos.php" method="post">
      <fieldset>
        <legend>Eliminar archivos</legend>
        <?php
          // Mostrar en pantalla
          print "<label>Seleccia archivo: </label>$seleccion<br>";
        ?>
        <label>Contraseña: </label>
        <input type="password" name="contrasena" value="">
        <hr>
        <input type="submit" name="" value="Eliminar archivos">
      </fieldset>
    </form>
  </body>
</html>
