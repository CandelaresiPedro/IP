<?php
/* Funcion que lee los datos del circo */
// @return array //retorna un arreglo asosiativo
function leerDatosCirco(){
    // array $circo // Arreglo asosiativo
    $circo =[];
    echo "Ingrese Nombre: ";
    $circo["nombre"]=trim(fgets(STDIN));
    echo "Ingrese Finicio: ";
    $circo["finicio"]=trim(fgets(STDIN));
    echo "Ingrese valor Entrada: ";
    $circo["valorEntrada"]=trim(fgets(STDIN));
    echo "Ingrese Cantidad de Payasos: ";
    $circo["cantPayasos"]=trim(fgets(STDIN));
    return $circo;
}
/* Programa Principal que muestra los datos del circo */
$circo=leerDatosCirco();
print_r ($circo);

