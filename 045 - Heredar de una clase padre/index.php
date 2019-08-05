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
      // CREAR NUEVA CLASE
      class Vehiculo extends Coche {
        // AÑADIR UN MÉTODO
        function resumen() {
          // IMPRIMIR EN PANTALLA
          print "<p>".$this->marca." ".$this->modelo." es un coche.</p>";
        }
        function setMarca($nuevaMarca) {
          $this->marca = $nuevaMarca;
        }
        function setModelo($nuevoModelo) {
          $this->modelo = $nuevoModelo;
        }
      }
      // CREAR INSTANCIA
      $elCoche = new Vehiculo("Toyota","Célica");
      // IMPRIMIR EN PANTALLA
      print "<p>".$elCoche->getMarca()." ".$elCoche->getModelo()." es un coche.</p>";
    ?>
  </body>
</html>
