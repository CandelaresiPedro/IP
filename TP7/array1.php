<?php
$frutas=["l"=>"limon","n"=>"naranja","m"=>"manzana","d"=>"durazno"];
ksort($frutas);
foreach($frutas as $indice => $unafruta){
echo "$indice=$unafruta\n";
}
