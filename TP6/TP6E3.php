<?php
/* Programa que devuelve los numeros enteros positivos menores a N */
/* int $numero */
$numero=0;
echo "Ingrese un numero postivo: ";
$numero=trim(fgets(STDIN));
for ($i=1; $i<=$numero;$i++){
    echo $i."\n";
}
echo "se ejecuta la otra instruccion";