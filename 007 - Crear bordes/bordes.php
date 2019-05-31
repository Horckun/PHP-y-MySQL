<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear bordes</title>
  </head>
  <body style="width: 20%;">
    <h1>Crear bordes</h1>
    <div style="text-align: justify; padding: 1%;">
      <!-- PHP -->
      <?php
        // ASIGNAR VALORES A LAS VARIABLES
        $texto = filter_input(INPUT_POST, "texto");
        $tamanoBorde = filter_input(INPUT_POST, "tamanoBorde");
        $tipoTamano = filter_input(INPUT_POST, "tipoTamano");
        $estiloBorde = filter_input(INPUT_POST, "estiloBorde");

        // HEREDOCS
        $estilo = <<<HERE
        "border: $tamanoBorde$tipoTamano $estiloBorde #0043b6;"
HERE;

        // MOSTRAR EN PANTALLA
        print "<div style=$estilo>";
        print $texto;
        print "</div>";
      ?>
    </div>
  </body>
</html>
