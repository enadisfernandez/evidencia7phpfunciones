<!--Funcion que pida por pantalla una temperatura en grados celsius,muestre un menú para convertirlos a Fahrenheit o kelvin y muestre el equivalente por pantalla.-->
<?php
function convertir($n1,$conversion){
  switch ($conversion) {
      case "tfarenheit":
    $conversion=($n1*1.8)+32;
    echo "La conversión de $n1 grados celsius a grados farenheit es: $conversion";
      break;
   case "tkelvin":
      $conversion=$n1+273.15;
          echo "La conversion de $n1 grados celsius a grados kelvin es: $conversion";
          break;
  }
}
 ?>
