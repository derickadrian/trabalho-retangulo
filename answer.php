<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Área e perímetro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1>Resposta</h1>

    <?php
    if(!isset($_GET['altura']) && !isset($_GET['largura'])) {
      header("location:rectangle.html");
    }

    echo "<p>";
    echo "<br>Altura: ".$_GET['altura'];
    echo "<br>Largura: ".$_GET['largura'];
    echo "<br>Área: ".$_GET['area'];
    echo "<br>Perímetro: ".$_GET['perimetro'];
    echo "</p>";
    ?>

    <nav>
      <ul>
        <li> <a href="rectangle.html">Realizar outro cálculo</a> </li>
      </ul>
    </nav>
  </body>
</html>
