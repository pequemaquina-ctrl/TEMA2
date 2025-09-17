<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <title>Mis Redes Sociales</title>
</head>
<body>
    <?php include 'cabecera.inc.php'; ?>
    <?php
    echo "<table border='1'>";
    echo "<tr><th>Key</th><th>Value</th></tr>";
    foreach ($_SERVER as $key => $value) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($key) . "</td>";
    
    if (is_array($value)) {
        echo "<td>" . htmlspecialchars(json_encode($value)) . "</td>";
    } else {
        echo "<td>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
        }
    echo "</table>";

    
    ?>
    </main>
    
    <?php include 'footer.inc.php'; ?>
</body>
</html>