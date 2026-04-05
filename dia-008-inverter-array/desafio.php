<?php
echo "Digite números: ";
$n = explode(" ", trim(fgets(STDIN)));

echo "Original: ";
foreach ($n as $num) {
    echo $num . " ";
}

echo "\nInvertido: ";
for ($i = count($n) - 1; $i >= 0; $i--) {
    echo $n[$i] . " ";
}

?>