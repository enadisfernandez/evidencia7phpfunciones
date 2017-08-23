<?php
function operaciones($n1,$n2,$operacion){
  $resultado=0;
  if ($operacion == "sumar") {
  $resultado = $n1 + $n2;
}elseif ($operacion == "restar") {
  $resultado = $n1 - $n2;
}elseif ($operacion == "multiplicar") {
  $resultado = $n1* $n2;
}
return $resultado;
}
 ?>
