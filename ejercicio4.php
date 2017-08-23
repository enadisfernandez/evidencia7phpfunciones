<!--Funcion que muestre la opcion sumar, restar, multiplicar,dividir,potencia y raiz.Debe mostrar por pantalla las operaciones y resultado.-->
<?php
function operaciones($n1,$n2,$operacion){

$resultado=0;
if ($operacion == "sumar") {
  $resultado = $n1 + $n2;
}elseif ($operacion == "restar") {
  $resultado = $n1 - $n2;
}elseif ($operacion == "multiplicar") {
  $resultado = $n1 * $n2;
}elseif ($operacion == "dividir") {
  $resultado = $n1 / $n2;
}elseif ($operacion == "potencia") {
  $resultado=pow($n1,$n2);
}elseif ($operacion == "raiz") {
  $resultado=sqrt($n1);
  $resultado=sqrt($n2);
}
return $resultado;
}



 ?>
