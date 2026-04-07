<?php
echo "Digite alguns números:  ";
$n = explode(" ", trim(fgets(STDIN)));

$pares = "";
$impares = "";
$contarPares = 0;
$contarimpares = 0;

foreach ($n as $num) {
    if ($num % 2 == 0) {
         $pares .= $num . " ";
         $contarPares++;    
    }else{
       $impares .= $num . " ";
       $contarimpares++;
    }
}


echo "Quantidade de Pares: " . $contarPares . "\n";
echo "Quantidade de ímpares: " . $contarimpares . "\n";
echo "Pares: " . $pares . "\n";
echo "Ímpares: " . $impares;
?>