<?php
  // Recuperar variables
  $contrasena = filter_input(INPUT_POST,"contrasena");
  $nombreArchivo = filter_input(INPUT_POST,"nombreArchivo");

  // Comprobar contraseña
  if($contrasena != "crear") {
    print "<h2>No tienes acceso a este archivo.</h2>";
    print "<a href='./'>Volver</a>";
  } else {
    // Declarar variable
    $archivo = fopen($nombreArchivo.=".dat","w");
    fclose($archivo);
    print "<h2>Archivo creado correctamente.</h2>";
    print "<a href='./'>Volver</a>";
  }
?>
