<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conectar con base de datos</title>
  </head>
  <body>
    <h1>Conectar con base de datos</h1>
    <!-- PHP -->
    <?php
      // Establecer y comprobar conexión
      $conexion = mysqli_connect("localhost","root","","l2jdb");
      if(!$conexion) {
        print "No se ha podido establecer una conexión.";
      } else {
        print "<h2>Conexión establecida</h2>";
        // Seleccionar tabla y comprobar
        $sql = "SELECT id,name,class FROM npc";
        $resultado = $conexion->query($sql);
        if(!$resultado) {
          print "No se ha podido seleccionar la base de datos.";
          print $resultado;
        } else {
          print "<h3>Base de datos seleccionada</h3>";
          // Comprobar y mostrar tabla
          $i = 0;
          while(($columnas = $resultado->fetch_assoc()) && $i < 10) {
            print "<p>ID: ".$columnas["id"]." - Nombre: ".$columnas["name"]." - Clase: ".$columnas["class"]."</p>";
            $i++;
          }
        }
      }
      // Cerrar conexión
      $conexion->close();
      if(!$conexion) {
        print "No se ha podido cerrar la conexión.";
      } else {
        print "<h4>Conexión cerrada correctamente.</h4>";
      }
    ?>
  </body>
</html>
