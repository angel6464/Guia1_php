<?php
function imprimirPiramide($filas) {
    echo "<div style='font-family: monospace; line-height: 1.2;'>";
    for ($i = 1; $i <= $filas; $i++) {

        echo str_repeat("&nbsp;", $filas - $i);
  
        echo str_repeat("*", 2 * $i - 1);

   
        echo "<br>";
    }
    echo "</div>";
}


imprimirPiramide(40);
?>
