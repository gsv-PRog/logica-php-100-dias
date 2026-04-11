<?php
echo "Digite alguns números: ";
$n = explode(" ", trim(fgets(STDIN)));
$tamanho = count($n);
$temp = "";

echo "Decrescente: ";
for ($i = 0; $i < $tamanho; $i++) {
    for ($j = 0; $j < $i; $j++) {
        if ($n[$i] > $n[$j]) {
            $temp = $n[$i];
            $n[$i] = $n[$j];
            $n[$j] = $temp;
        }
    }
}
foreach ($n as $num) {
    echo $num . " ";
}

echo "\n";
echo "Crescente: ";
for ($i = 0; $i < $tamanho; $i++) {
    for ($j = 0; $j < $i; $j++) {
        if ($n[$i] < $n[$j]) {
            $temp = $n[$i];
            $n[$i] = $n[$j];
            $n[$j] = $temp;
        }
    }
}

foreach ($n as $num) {
    echo $num . " ";
}
?>