<?php

function añadirnumero ($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new InvalidArgumentException("Ambos argumentos deben ser números.");
    }
    return $a + $b;
}

try {
    echo añadirnumero(10, 20) . "\n"; 
    echo añadirnumero(10, "cinco") . "\n"; 
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
try {
    echo añadirnumero(10,20) . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}


?>

