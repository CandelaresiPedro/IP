<?php
/*Funcion que devuelve la suma de todos los valores de celulares */
// @param array $val // arreglo de int
// @return int $suma
function suma($val) {
    // int $total
    $suma=0;
    $total=count($val);
    for ($i=0; $i < $total; $i++){
        $suma=$suma+$val[$i];
    }
    return $suma;
}
// programa principal
// array    $celulares //arreglo indexado de string
// array    $valor  //arreglo indexado de float
// int  $num
$celulares = ["Moto G6", "Samsumg J7", "LG K9", "Iphone SE", "Galaxy A9"];
$valor = [22030.90, 10500.00, 27999.00, 38105.00, 17000.80];
$num = 0;
echo "Ingrese numero de celular: ";
$num=trim(fgets(STDIN));
echo $celulares[$num]." - ".$valor[$num]."\n";
echo "Costo total de los celulares: ";
echo suma($valor)."\n";