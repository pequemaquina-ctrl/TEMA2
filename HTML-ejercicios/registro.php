<?php

        $errors = [];
        $name = $surname = $username = $email = $date = $gender = "";
        $acceptate_the_conditions = $acceptate_of_sending_advertising = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars(trim($_POST["name"] ?? ""));
        $surname = htmlspecialchars(trim($_POST["surname"] ?? ""));
        $username = htmlspecialchars(trim($_POST["username"] ?? ""));
        $password = $_POST["password"] ?? "";
        $password2 = $_POST["password2"] ?? "";
        $email = htmlspecialchars(trim($_POST["email"] ?? ""));
        $date = htmlspecialchars(trim($_POST["date"] ?? ""));
        $gender = htmlspecialchars($_POST["gender"] ?? "");
        $acceptate_the_conditions = isset($_POST["acceptate_the_conditions"]) ? "checked" : "";
        $acceptate_of_sending_advertising = isset($_POST["acceptate_of_sending_advertising"]) ? "checked" : "";

        if ($name == "") $errors['name'] = "Name requerido.";

        if ($surname == "") $errors['surname'] = "Surname requerido.";

        if ($username == "") $errors['username'] = "Username requerido.";

        if ($password == "") $errors['password'] = "contraseña requerida.";

        if ($password2 == "") $errors['password2'] = "confirma la segunda contraseña.";

        if ($email == "") $errors['email'] = "Gmail is requerido.";

        if ($date == "") $errors['date'] = " fecha requerida.";

        if ($gender == "") $errors['gender'] = "genero requerido.";

        if (!$acceptate_the_conditions) $errors['acceptate_the_conditions'] = "acepta las condiciones.";

        if ($name && !preg_match("/^[A-Za-zÀ-ÿ\s]+$/", $name)) $errors['name'] = "nombre tiene carcteres no validos.";
    
        if ($surname && !preg_match("/^[A-Za-zÀ-ÿ\s]+$/", $surname)) $errors['surname'] = "el surname tiene carcteres no validos.";

        if ($username && !preg_match("/^\w{3,}$/", $username)) $errors['username'] = "Userame de al menos 3 carcteres.";

        if ($password && $password !== $password2) $errors['password2'] = "las contaseñas no son iguales.";

        if ($password && strlen($password) < 6) $errors['password'] = "la contraseña tiene que ser mayor a 6 caracteres.";

        if ($email && !preg_match("/^[\w\.\-]+@([\w\-]+\.)+[A-Za-z]{2,50}$/", $email)) $errors['email'] = "Gmail invalido.";
  
        if ($date && !preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) $errors['date'] = "formato DD-MM-YYYY .";

        if (!$errors) {
            echo "<h2>Registration completed correctly!</h2>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style> .error { color: red; font-size: 90%; } </style>
    <?php include 'cabecera.inc.php' ?>
</head>
<body>
<h2>Registro</h2>
<form method="POST" action="registro.php" autocomplete="off">

  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <span class="error"><?php echo $errors['name'] ?? ""; ?></span><br>
  Surname: <input type="text" name="surname" value="<?php echo $surname; ?>">
  <span class="error"><?php echo $errors['surname'] ?? ""; ?></span><br>
  Username: <input type="text" name="username" value="<?php echo $username; ?>">
  <span class="error"><?php echo $errors['username'] ?? ""; ?></span><br>
  contraseña: <input type="password" name="password">
  <span class="error"><?php echo $errors['password'] ?? ""; ?></span><br>
  Confirma contraseña: <input type="password" name="password2">
  <span class="error"><?php echo $errors['password2'] ?? ""; ?></span><br>
  Email: <input type="text" name="email" value="<?php echo $email; ?>">
  <span class="error"><?php echo $errors['email'] ?? ""; ?></span><br>
  fecha de nacimiento: <input type="date" name="date" value="<?php echo $date; ?>">
  <span class="error"><?php echo $errors['date'] ?? ""; ?></span><br>
         Genero:
        <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>>chico
        <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>>Chica
        <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked"; ?>>otro
        <span class="error"><?php echo $errors['gender'] ?? ""; ?></span><br>
        <input type="checkbox" name="acceptate_the_conditions" <?php echo $acceptate_the_conditions; ?>> acepto las condiciones
        <span class="error"><?php echo $errors['acceptate_the_conditions'] ?? ""; ?></span><br>
        <input type="checkbox" name="acceptate_of_sending_advertising" <?php echo $acceptate_of_sending_advertising; ?>> acepto recivir advertencias<br>
         <input type="submit" value="Registro">

         
        </form>

    <?php include 'footer.inc.php' ?>

    </body>
</html>
