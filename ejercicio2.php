<?php
function sumaNumerosPares($array) {
    $sumapar = 0;
    foreach ($array as $numero) {
        if ($numero % 2 === 0) {
            $sumapar += $numero;
        }
    }
    return $sumapar;
}

$array = [1, 2, 3, 4, 5, 6,8,40,12,1,5];
echo "La suma de los números pares es: " . sumaNumerosPares($array);
?>
