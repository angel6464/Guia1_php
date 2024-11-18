<?php
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $char = $cadena[$i];
        if (isset($frecuencia[$char])) {
            $frecuencia[$char]++;
        } else {
            $frecuencia[$char] = 1;
        }
    }
    return $frecuencia;
}

$texto = "hola soy angel alvarado y estudio Kodigo";
$frecuencia = frecuenciaCaracteres($texto);
print_r($frecuencia);
?>
