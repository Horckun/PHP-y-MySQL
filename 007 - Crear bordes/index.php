<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear bordes</title>
  </head>
  <body>
    <h1>Crear bordes</h1>
    <!-- FORMULARIO QUE ENVIA A BORDES.PHP POR MÉTODO POST -->
    <form class="" action="bordes.php" method="post">
      <div id="input">
        <h2>Texto a modificar</h2>
        <textarea name="texto" rows="10" cols="40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
      </div>
      <table border="2">
        <tr>
          <td><h3>Estilo del borde</h3></td>
          <td colspan="2"><h3>Tamaño del borde</h3></td>
        </tr>
        <tr>
          <td>
            <select class="" name="estiloBorde">
              <option value="ridge">Cresta</option>
              <option value="groove">Ranura</option>
              <option value="double">Doble</option>
              <option value="inset">Recuadro</option>
              <option value="outset">Comienzo</option>
            </select>
          </td>
          <td>
            <select size="5" name="tamanoBorde">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="5">5</option>
              <option value="10">10</option>
            </select>
          </td>
          <td>
            <input type="radio" name="tipoTamano" value="px" checked> píxeles.
            <br>
            <input type="radio" name="tipoTamano" value="pt"> puntos.
            <br>
            <input type="radio" name="tipoTamano" value="cm"> centímetros.
            <br>
            <input type="radio" name="tipoTamano" value="in"> pulgadas.
          </td>
        </tr>
      </table>
      <div class=""><button type="submit">Mostrar</div>
    </form>
  </body>
</html>
