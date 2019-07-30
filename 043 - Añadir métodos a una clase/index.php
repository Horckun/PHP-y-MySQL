<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Añadir métodos a una clase</title>
  </head>
  <body>
    <h1>Añadir métodos a una clase</h1>
    <!-- PHP -->
    <?php
      // DEFINIR UNA CLASE
      class Coche {
        // DECLARAR VARIABLE PRIVADA
        private $marca,$modelo;

        // FUNCIONES
        function __construct($mar = "Marca",$mo = "Modelo") {
          $this->marca = $mar;
          $this->modelo = $mo;
        }
        function setMarca($nuevaMarca) {
          $this->marca = $nuevaMarca;
        }
        function setModelo($nuevoModelo) {
          $this->modelo = $nuevoModelo;
        }
        function getMarca() {
          return $this->marca;
        }
        function getModelo() {
          return $this->modelo;
        }
      }

      // CREAR INSTANCIA
      $elCoche = new Coche();

      // IMPRIMIR NOMBRE ORIGINAL
      print "<p>Marca y modelo inicial: ".$elCoche->getMarca()." ".$elCoche->getModelo().".</p>";

      // CAMBIAR NOMBRE
      $elCoche->setMarca("Hyundai");
      $elCoche->setModelo("Coupé");
      print "<p>Marca y modelo actual: ".$elCoche->getMarca()." ".$elCoche->getModelo().".</p>";
    ?>
  </body>
</html>
