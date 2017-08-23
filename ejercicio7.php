<!--Funcion que valide si el caracter introducido es número y muestre por pantalla el resultado.-->
<?php
function caracter($n1){
  if ($n1=='0' or $n1=='1' or $n1=='2' or $n1=='3' or $n1=='4' or $n1=='5' or $n1=='6' or $n1=='7' or $n1=='8' or $n1=='9') {
    echo " El caracter $n1 es número";
  }else {
    echo "NO es número";
  }
}


 ?>
