<?php
class Excepciones2 extends Exception {
    function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}


function numeros($numero, $numero2) {
    if (!is_numeric($numero) || !is_numeric($numero2)) {
        throw new Excepciones2("Ambos argumentos deben ser números.");
    }
    
    if ($numero2 == 0) {
        throw new Excepciones2("No se puede dividir entre 0");
    }

    return $numero / $numero2;
}


try {
    echo numeros(10,5) . "<br>\n";   
    echo numeros(20,4) . "<br>\n";   
    echo numeros("a",5) . "<br>\n";  
    echo numeros(30,0) . "<br>\n"; 
} catch (Excepciones2 $e) {
    echo "Error: " . $e->getMessage() . "<br>\n";
}
?>
