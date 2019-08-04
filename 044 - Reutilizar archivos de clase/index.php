<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reutilizar archivos de clase</title>
  </head>
  <body>
    <h1>Reutilizar archivos de clase</h1>
    <!-- PHP -->
    <?php
      // ADJUNTAR ARCHIVO DE CLASE
      include "Coche.php";
      // CREAR OBJETO
      $elCoche = new Coche();
      // ESTABLECER VALORES
      $elCoche->setMarca("Hyundai");
      $elCoche->setModelo("Coupé");
      // IMPRIMIR EN PANTALLA
      print "<p>Coche: ".$elCoche->getMarca()." ".$elCoche->getModelo()."</p>";
    ?>
  </body>
</html>
