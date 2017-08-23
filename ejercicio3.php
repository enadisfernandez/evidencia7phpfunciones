<!--Funcion que calcule el precio de un articulo considerado que se conoce el precio del articulo en 3 establecimientos con su preio y el precio promedio.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>precio promedio</title>
  </head>
  <body>
    <?php
    function producto($n1,$n2,$n3){
      $resultado=0;
      $resultado = $n1 + $n2 + $n3 / 3;
      echo "El precio del shampoo en ara es: $n1 <br><br>";
      echo "El precio del shampoo en olimpica es: $n2 <br><br>";
      echo "El precio del shampoo en surtimax es: $n3 <br><br>";
      echo "El promedio del producto es: $resultado";
}
     ?>
  </body>
</html>
