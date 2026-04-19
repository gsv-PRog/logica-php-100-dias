<?php
echo "Digite alguns números: ";
$numbers = explode(" ", trim(fgets(STDIN)));
echo "Target: ";
$target = (int)trim(fgets(STDIN));

$bandeira = 0;


/* ou mais eficiente prefira usar este loop

for ($i = 0; $i < count($numbers); $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {

*/
foreach ($numbers as $index1 => $valor1) {
    foreach ($numbers as $index2 => $valor2) {
        if ($valor1 != $valor2 && $valor1 + $valor2 == $target) {
            echo "Indices: $index1 e $index2";
            break 2;
        }
    } 
}
?>