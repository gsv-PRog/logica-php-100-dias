<?php
echo "Digite alguns números: ";
$n = explode(" ", trim(fgets(STDIN)));
$tamanho = count($n);
// loop para imprimir o original
echo "Original: ";
foreach ($n as $num) {
    echo $num . " ";
}
echo "\n";
echo "Sem repetições: ";

// remover duplicatas
for ($i = 0; $i < $tamanho; $i++) {
    $repetido = false;
    for ($j = 0; $j < $i; $j++) {
        // 1 2 3 1
        if ($n[$i] == $n[$j]) {
            $repetido = true;
        }
    }
    if (!$repetido) {
    echo $n[$i] . " ";
}
}



?>