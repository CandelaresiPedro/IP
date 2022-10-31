<?php
/* Programa que solicita numeros al usuario, hasta que el usuario ingrese 0, luego devuelve la sumatoria de los numeros ingresados */
/* int $numero, $cantNum, $suma */
$numero = 0;
$cantNum = 0;
$suma = 0;
do {
    system ("clear");
    echo "Cantidad de numeros ingresados: ".$cantNum++."\n";
    echo "Ingrese un numero (0 para salir): ";
    $numero=(trim(fgets(STDIN)));
    $suma=$suma+$numero;
} while ($numero <> 0);
echo "La sumatoria de todos los numeros ingresados es: ".$suma."\n";