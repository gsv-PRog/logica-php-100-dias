<?php
echo "Digite uma palavra ou uma frase: ";
$texto = strtolower(trim(fgets(STDIN)));
// extra
$a = 0;
$e = 0;
$i = 0;
$o = 0;
$u = 0;

for ($pos = 0; $pos < strlen($texto); $pos++) {
    if ($texto[$pos] == 'a') {
        $a++;
    } elseif ($texto[$pos] == 'e') {
        $e++;
        
    }elseif ($texto[$pos] == 'i') {
        $i++;
    }
    elseif ($texto[$pos] == 'o') {
        $o++;
       
    } elseif ($texto[$pos] == 'u') {
        $u++;
    } 
}

echo "a: $a\n";
echo "e: $e\n";
echo "i: $i\n";
echo "o: $o\n";
echo "u: $u\n";

$total = $a + $e + $i + $o + $u;
echo "Total: $total\n";
    
?>