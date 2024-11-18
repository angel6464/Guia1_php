<?php
function invertirListareversa($array) {
    return array_reverse($array);
}

$arrayOriginal = [1, 2, 3, 4, 5];
$arrayInvertido = invertirListareversa($arrayOriginal);
print_r($arrayInvertido);
?>
