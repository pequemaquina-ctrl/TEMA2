<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>count</title>
</head>
<body>
<body>
    <?php include 'cabecera.inc.php'; ?>
<body>
    <?php
    
    for ($i = 1; $i <= 30; $i++) {
        echo "<p>$i</p>";
    }
    ?>

    <h2>Factorial of 5</h2>
    <?php
        $factorial = 1;
        for ($i = 1; $i <= 5; $i++) {
            $factorial *= $i;
        }
        echo "5! = " . $factorial;
    
    ?>
    

    <?php include 'footer.inc.php'; ?>
</body>
</html>
/*function calculo_numerico ($a, $b=5, $c) {
$resultado = $a * $b * $c;
return $resultado;
}
no es correcto por que la variable b tendria que estar al final ya que tiene un valor por defecto
*/