<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertar datos en tabla</title>
  </head>
  <body>
    <h1>Insertar datos en tabla</h1>
    <?php
      $conexion = mysqli_connect("localhost","root","","listadotareas");
      if(!$conexion) {
        print "<h2>No se ha podido conectar con la base de datos.</2>";
      } else {
        print "<h2>Se ha conectado con la base de datos.</h2>";
        $seleccion = "SELECT * FROM tareas";
        $resultado = $conexion->query($seleccion);
        if(!$resultado) {
          print "<h3>No se ha podido seleccionar la tabla.</3>";
        } else {
          print "<h3>Se ha seleccionado la tabla.</h3>";
          print <<<HERE
            <table border='1'>
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Correo</th>
                </tr>
              <thead>
              <tfoot>
                <tr>
                  <td colspan='2' style='text-align: center;'>Usuarios</td>
                </tr>
              </tfoot>
              <tbody>
HERE;
          while($listado = $resultado->fetch_assoc()) {
            print "<tr>";
            print "<td>".$listado['nombre']."</td>";
            print "<td>".$listado['correo']."</td>";
            print "</tr>";
          }
            print <<<HERE
                </tbody>
              </table>
HERE;
          $cerrar = $conexion->close();
          if(!$cerrar) {
            print "<h4>No se ha podido cerrar la conexión.</h4>";
          } else {
            print "<h4>Se ha cerrado la conexión.</h4>";
          }
        }
      }
    ?>
  </body>
</html>
