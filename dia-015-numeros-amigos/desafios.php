<?php

echo "Escreva o primeiro número: ";
$n1 = (int)trim(fgets(STDIN));
echo "Escreva o segundo número: ";
$n2 = (int)trim(fgets(STDIN));

$soma1 = 0;
$soma2 = 0;

for ($i = 1; $i < $n1; $i++) {
    if ($n1 % $i == 0) {
        $soma1 += $i;
    }
}

for ($i = 1; $i < $n2; $i++) {
    if ($n2 % $i == 0) {
        $soma2 += $i;
    }
}


if ($soma1 == $n2 && $soma2 == $n1) {
    echo "São números amigos!";
}else {
    echo "Não são números amigos.";
}
?>