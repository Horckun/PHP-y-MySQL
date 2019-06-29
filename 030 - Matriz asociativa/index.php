<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Matriz asociativa</title>
  </head>
  <body>
    <h1>Matriz asociativa</h1>
    <!-- PHP -->
    <?php
      // Declarar matriz4
      $pais["España"] = "Madrid";
      $pais["Francia"] = "Paris";
      $capital = $pais["España"];

      // Visualizar matriz
      print "España: $capital.<hr>";

      // Matriz asociativa con array
      $capitales = array("España" => "Madrid", "Francia" => "Paris");
      $capital = $capitales["Francia"];
      print "Francia: $capital.<hr>";

      // Matriz asociativa con foreach
      foreach($capitales as $pais => $capital) {
        print "$pais: $capital.<br>";
      }
    ?>
  </body>
</html>
