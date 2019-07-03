<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manipular cadenas</title>
  </head>
  <body>
    <h1>Manipular cadenas</h1>
    <?php
      // Si no tenemos ningún valor, se crea un formulario
      if(!filter_has_var(INPUT_POST,"frase")) {
        print <<< HERE
          <form style="width:30%;" method="post">
            <fieldset>
              <textarea name="frase" rows="10" cols="30%"></textarea>
              <hr>
              <input type="submit" value="Enviar">
            </fieldset>
          </form>
HERE;
      } else {
        // Tenemos un valor guardado, trabajamos con él
        $frase = filter_input(INPUT_POST,"frase");
        $nuevaFrase = "";

        // Separar frase de matriz
        $palabras = explode(" ",$frase);
        foreach($palabras as $palabra) {
          $palabra = rtrim($palabra);
          $primeraLetra = substr($palabra,0,1);
          $restoPalabra = substr($palabra,1,strlen($palabra)-1);
          // Buscamos una cadena
          if(strstr("aeiouAEIOU",$primeraLetra)) {
            // Es una vocal
            $nuevaPalabra = $palabra;
          } else {
            // Es una consonante
            $nuevaPalabra = $restoPalabra.$primeraLetra;
          }
          $nuevaFrase = $nuevaFrase.$nuevaPalabra." ";
        }
        print "<p>$nuevaFrase.</p>";
      }
    ?>
  </body>
</html>
