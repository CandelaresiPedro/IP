<?php
/* Progrma que calcula los numeros pares menores o iguales a un numero ingresado por el usuario */
/* int $numero */
echo "Ingrese un numero: ";
$numero=trim(fgets(STDIN));
echo "Los numeros pares menores o iguales a ".$numero." son: \n";
while ($numero<>0){
    if ($numero % 2 == 0 ){
        echo $numero." ";
        $numero = $numero - 2;
    }
    else {
        $numero = $numero -1;
    }
}
echo "\n";