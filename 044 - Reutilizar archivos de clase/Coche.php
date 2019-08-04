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
?>
