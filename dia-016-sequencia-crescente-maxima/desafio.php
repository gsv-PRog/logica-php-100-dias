<?php
echo "=========================================================================\n";
echo "Programa que encontra a maior sequência crescente consecutiva\n";
echo "=========================================================================\n";

echo "Digite alguns números: ";
$n = explode(" ", trim(fgets(STDIN)));
$tamanho = count($n);

$maiorSequencia = [];
$sequenciaAtual = [];

for ($i = 0; $i < $tamanho; $i++) {
    if ($n[$i] > $n[$i - 1]) {
            $sequenciaAtual[] = $n[$i];
    }else {
        if (count($sequenciaAtual) > count($maiorSequencia)) {
            $maiorSequencia = $sequenciaAtual;
        }

        $sequenciaAtual = [$n[$i]];
    }
}
echo "Maior sequência crescente: ";
print_r($maiorSequencia);
echo "Tamanho total: " . count($maiorSequencia);


?>