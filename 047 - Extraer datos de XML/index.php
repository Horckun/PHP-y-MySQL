<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Extraer datos de XML</title>
  </head>
  <body>
    <h1>Extraer datos de XML</h1>
    <!-- PHP -->
    <?php
      // CARGAR Y EXAMINAR ARCHIVO
      $xml = simplexml_load_file("main.xml");
      if(!$xml) {
        print "<h2>No se ha podido cargar el archivo XML</h2>";
      } else {
        print "<h2>XML</h2>";
        $texto = $xml->asXML();
        $texto = htmlentities($texto);
        print "<pre>$texto</pre>";
        print "<h3>Extraer elemento</h3>";
        print "<p>$xml->titulo</p>";
        print "<h3>Extraer en array</h3>";
        print "<ul>";
        foreach ($xml->children() as $key => $value) {
          print "<li><b>$key:</b> $value</li>";
        }
        print "</ul>";
      }
    ?>
  </body>
</html>
