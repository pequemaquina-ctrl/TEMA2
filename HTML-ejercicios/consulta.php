<!DOCTYPE html>
<html>
<head>
    <title>Datos del formulario</title>
    <meta charset="UTF-8">
</head>
<?php include 'cabecera.inc.php'; ?>
<body>
    <h2>Datos recibidos:</h2>
    <p>Nombre: <?php echo $_POST["nombre"]; ?></p>
    <p>Email: <?php echo $_POST["email"]; ?></p>
    <p>Mensaje: <?php echo $_POST["mensaje"]; ?></p>
    <p>Fecha de cumpleaños: <?php echo $_POST["fecha_nacimiento"]; ?></
   
</body>
<?php include 'footer.inc.php'; ?>
</html>
