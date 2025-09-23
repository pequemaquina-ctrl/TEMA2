<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Principal - Portafolio de Desarrollador Web</title>
</head>
<body>
    <?php include 'cabecera.inc.php'; ?>
    <header>


    <h1>¡Hola! Soy Desarrollador Web</h1>
    </header>
    <main>

    <section>
        
    <p>
        Mi nombre es ismael. Apasionado por la programación y el 
        diseño web, disfruto creando sitios funcionales, accesibles
        y modernos utilizando tecnologías como HTML, CSS, JavaScript
         y frameworks actuales. Trabajo en proyectos interactivos y 
         optimizados con enfoque en la experiencia de usuario y el
          rendimiento.
    </p>
    <img src="img/pexels-photo-1222271.webp" alt="Foto de perfil">
    </section>

    <section>
    <h2>¿Quieres contactarme?</h2>
    <p>
        Escríbeme directamente: 
        <a href="mailto:tu@mail.com">Enviar correo</a>
    </p>
    </section>
    <section>
    <h2>formulario de contacto</h2>
    <form action="consulta.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Mensaje:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <label for="birthdate">Fecha de cumpleaños:</label>
        <input type="date" id="birthdate" name="birthdate"><br><br>

        <input type="submit" value="Enviar">
    </form>

    </section>
    </main>

    <?php include 'footer.inc.php'; ?>
    
</body>
</html>
