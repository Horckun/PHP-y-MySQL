<!-- PHP -->
<?php
  // Conectar con base de datos
  $conexion = mysqli_connect("localhost","root","","listadotareas");
  // Comprobar conexión
  if(!$conexion) {
    print "No se ha podido conectar con la base de datos";
  } else {
    // Modificar valores
    $modificar = "UPDATE tareas SET nombre='Javi',correo='horckun@gmail.com' WHERE id=0";
    // Comprobar la modificacion
    if($conexion->query($modificar) != TRUE) {
        print "No se ha podido editar los datos";
    }
    // Cerrar conexión
    $conexion->close();
    // Volver al inicio
    header("Location: ./");
  }
?>
