<?php

echo "Digite 5 numeros: ";
$numero = trim(fgets(STDIN));

$numeros = explode(" ", $numero);

$maior = $numeros[0];
$menor = $numeros[0];

foreach ($numeros as $num) {
    if ($num > $maior) {
        $maior = $num;
    }

    if ($num < $menor) {
        $menor = $num;
    }
}

echo "Maior número: $maior\n";
echo "Menor número: $menor\n";
?>