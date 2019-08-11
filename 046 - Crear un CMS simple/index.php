    <?php
      // RECUPERAR VARIABLES
      if(filter_has_var(INPUT_GET,"menu")) {
        $menu = filter_input(INPUT_GET,"menu");
      } else {
        $menu = "menu.html";
      }
      if(filter_has_var(INPUT_GET,"contenido")) {
        $contenido = filter_input(INPUT_GET,"contenido");
      } else {
        $contenido = "contenido.html";
      }
      // INCLUIR ARCHIVO
      include "top.html";
      // MOSTRAR EN PANTALLA
      print "<div class=\"menu\"><br>";
      include($menu);
      print "</div>";
      print "<div class=\"contenido\"><br>";
      include($contenido);
      print "</div>";
    ?>
  </body>
</html>
