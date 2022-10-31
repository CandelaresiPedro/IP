<?php
/*  Funcion que solicita las n temperaturas a un usuario */
//  @param int $ntemp
//  @return int
function leerTemperaturas($nTemp){
    $temp = [];
    for($i=0; $i<$nTemp;$i++){
        $contador=$i+1;
        echo "Temperatura nº ".$contador.": ";
        $temp[$i]=trim(fgets(STDIN));
        }
    return $temp;
    }  
/* Funcion que muestra las n temperaturas ingresadas por el usuario */
//  @param int $temp
function listarTemperaturas($temp){
    // int $temp
    foreach($temp as $index => $t){
        $contador = $index+1;
        echo "Temperatura nº ".$contador.": ".$t."\n";
    }
}
/* Funcion que muestra las n temperaturas ingresadas por el usuario */
//  @param int $ptemp
//  @return float
function promTemperaturas($pTemp){
    // int $promedio
    $promedio=0;
    $div=count($pTemp);
    foreach($pTemp as $index => $pro){
        $promedio=$promedio + $pro;
    }
    $promedio = $promedio/$div;
    return $promedio;
}
/* Funcion que dado un arreglo temperaturas y una temperatura determinada, obtenga el porcentaje de temperaturas que superan a la temperatura determinada */
//  @param int $dTemp
//  @return float
function porcTemperaturaSuperiores($dTemp, $temp){
    $porcentaje=0;
    foreach($temp as $j => $t){
         if ($t > $dTemp){
            $porcentaje++;
         }
    }
    $porcentaje=($porcentaje*100)/count($temp);
    return $porcentaje;
}
/* Funcion que devuelve la posicion de la temperatura mas baja */
function minTemperatura($minTemp){
    $min = 0;
    $minPosicion = 0;
    $minima = $minTemp;
    sort($minima);
    foreach($minTemp as $k => $min){
        if($min == $minima[0]){
            $minPosicion = $k+1;
        }
    }
    return $minPosicion;
}
/* Funcion que devuelve la posicion de la temperatura mas alta */
function maxTemperatura($maxTemp){
    $max = 0;
    $maxPosicion = 0;
    $maxima = $maxTemp;
    rsort($maxima);
    foreach($maxTemp as $k => $max){
        if($max == $maxima[0]){
            $maxPosicion = $k+1;
        }
    }
    return $maxPosicion;
}
/* Funcion que muestra las n temperaturas ingresadas por el usuario */
function extremosTemperaturas($exTemp){
    $extremos=[];
    $min=minTemperatura($exTemp)-1;
    $max=maxTemperatura($exTemp)-1;
    $extremos= ["min"=>$exTemp[$min],"max"=>$exTemp[$max]];
    return $extremos;
 }
/* Programa Principal */
// int $temp
$opcion = 0;
$temperaturas =[];
do{
    echo "Ingrese una opcion: \n";
    echo "1 - Ingresar temperaturas \n";
    echo "2 - Listar temperaturas \n";
    echo "3 - Obtener Promedio de temperaturas \n";
    echo "4 - Porcentaje de temperaturas mayores a:  \n";
    echo "5 - Obtener posicion de menor temperatura \n";
    echo "6 - Obtener posicion de mayor temperatura \n";
    echo "7 - Obtener menor y mayor temperatura \n";
    echo "8 - Salir\n";
    echo "Su opcion: ";
    $opcion=trim(fgets(STDIN));
    if ($opcion == 1){
        echo "Ingrese cantidad de temperaturas\n";
        $ntemp=trim(fgets(STDIN));
        $temperaturas=leerTemperaturas($ntemp);
    } 
    else if ($opcion == 2){
        listarTemperaturas($temperaturas);
    }
    else if ($opcion == 3){
        echo "El promedio de temperaturas es: ".promTemperaturas($temperaturas)."\n"; 
    }
    else if ($opcion == 4){
        echo "Ingrese temperatura determinada: \n";
        $determinada=trim(fgets(STDIN));
        echo "El porcentaje de temperaturas mayores a ".$determinada." es ".porcTemperaturaSuperiores($determinada, $temperaturas)."%\n"; 
    }
    else if ($opcion == 5){
        echo "La posicion de la temperatura minima es: ".minTemperatura($temperaturas)."\n";
    }
    else if ($opcion == 6){
        echo "La posicion de la temperatura maxima es: ".maxTemperatura($temperaturas)."\n";
    }
    else if ($opcion == 7){
        $ex=extremosTemperaturas($temperaturas);
        echo "La temperatura minima ingresada es de: ".$ex["min"]."\n";
        echo "La temperatura maxima ingresada es de: ".$ex["max"]."\n";
    }
}while ($opcion!=8);
echo "Que tenga buen dia!\n";