<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Primera prueba php</title>
</head>
<body>
<?php
$mensaje = "Este es un archivo php que se encuentra en el servidor.";


$numero = 42;


$activo = true;


echo "<p>$mensaje</p>";
echo "<p>El número es: $numero</p>";
echo "<p>El estado activo es: " . ($activo ? 'Sí' : 'No') . "</p>";
?>
<section>
    <?php
include(“archivo.php”);
include_once(“otro.php”);
require(“prueba.inc.php”);
require_once(“inventado.php”)
?>
</section>
</body>

</html>
