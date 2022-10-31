<?php
/* Funcion que crear un arreglo multidimencional*/
// @return array // retorna un arreglo multidimencional
function cargaMascotas(){
    // array $mascotas1 // arreglo asosiativo
    // array $mascotas2 // arreglo asosiativo
    // array $mascotas3 // arreglo asosiativo
    // array $misMascotas // arreglo multidimencional
    $mascotas1=["nombre"=>"Gonzo","edad"=>9,"tipo"=>"perro"];
    $mascotas2=["nombre"=>"Peggy","edad"=>3,"tipo"=>"puerco"];
    $mascotas3=["nombre"=>"Harry","edad"=>4,"tipo"=>"hamster"];
    $misMascotas=[$mascotas1, $mascotas2, $mascotas3];
    return $misMascotas;
}
/* Funcion que crea un arreglo multidimencional de mascotas y muestra las mascotas en pantalla */
function muestraDatos($arregloMascotas){
    $index=count($arregloMascotas);
    foreach($arregloMascotas as $index => $mascota){
        $numMasc=$index+1;
        echo "Mascota ".$numMasc.": ".$mascota["nombre"]." es ".$mascota["tipo"]." de ".$mascota["edad"]." años.\n";
    }
}
muestraDatos(cargaMascotas());

