<?php
  // Guardar datos en variables
  $primero = filter_input(INPUT_POST,"primero");
  $segundo = filter_input(INPUT_POST,"segundo");
  $numeros = array("A","B","C","D","E");
  $letra1 = $numeros[$primero];
  $letra2 = $numeros[$segundo];

  /*
      MULTIPLICAR UNA LETRA POR OTRA

      A   B   C   D   E
  A   0   0   0   0   0
  B   0   1   2   3   4
  C   0   2   4   6   8
  D   0   3   6   9   12
  E   0   4   8   12  16
  */

  // Declarar variable para valores
  $multi = array(
    array(0,0,0,0,0),
    array(0,1,2,3,4),
    array(0,2,4,6,8),
    array(0,3,6,9,12),
    array(0,4,8,12,16)
  );
  $resultado = $multi[$primero][$segundo];

  // Mostrar resultado
  print "El resultado de $letra1 x $letra2 es $resultado.";
?>
