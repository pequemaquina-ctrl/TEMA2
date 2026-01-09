# 💼 Portfolio Web - Tema 2

> Un portfolio personal interactivo y funcional desarrollado con HTML, CSS, JavaScript y PHP

## 📋 Descripción

Este proyecto es un **portfolio web profesional** que muestra mis habilidades como desarrollador full stack. Incluye una página principal con información personal, formulario de contacto funcional y diseño responsive optimizado para cualquier dispositivo.

## ✨ Características

- **Diseño limpio y profesional** adaptado a móviles y escritorio
- **Formulario de contacto funcional** con validación
- **Estructura modular** con includes PHP reutilizables
- **Optimizado para SEO** y accesibilidad web
- **Código limpio** siguiendo las mejores prácticas

## 🛠️ Tecnologías Utilizadas

- **HTML5** - Estructura semántica
- **CSS3** - Estilos y diseño responsive
- **JavaScript** - Interactividad
- **PHP** - Backend y procesamiento de formularios

## 🚀 Características Principales

### 1. Página Principal
- Presentación personal profesional
- Imagen de perfil
- Descripción de habilidades y experiencia

### 2. Formulario de Contacto
- Campos validados (nombre, email, mensaje)
- Campo adicional de fecha de cumpleaños
- Procesamiento mediante PHP
- Envío seguro de datos

### 3. Arquitectura Modular
- `cabecera.inc.php` - Header reutilizable
- `footer.inc.php` - Footer reutilizable
- `consulta.php` - Procesamiento del formulario

## 📂 Estructura del Proyecto

```
tema2/
│
├── index.php              # Página principal
├── consulta.php           # Procesador del formulario
├── cabecera.inc.php       # Header incluible
├── footer.inc.php         # Footer incluible
├── img/                   # Carpeta de imágenes
│   └── pexels-photo-1222271.webp
└── README.md              # Este archivo
```

## 💻 Instalación y Uso

### Requisitos Previos
- Servidor web con soporte PHP (Apache, Nginx, XAMPP, etc.)
- PHP 7.4 o superior

### Pasos de Instalación

1. **Clona el repositorio**
   ```bash
   git clone https://github.com/pequemaquina-ctrl/tema2.git
   ```

2. **Coloca los archivos en tu servidor**
   ```bash
   cd tema2
   # Copia los archivos a tu directorio web (ej: htdocs, www, public_html)
   ```

3. **Configura el servidor**
   - Asegúrate de que PHP esté habilitado
   - Verifica los permisos de escritura si es necesario

4. **Accede desde el navegador**
   ```
   http://localhost/tema2/
   ```

## 🎯 Funcionalidades del Formulario

El formulario de contacto incluye:

- ✅ Validación de campos obligatorios
- ✅ Validación de formato de email
- ✅ Campo de mensaje con área de texto amplia
- ✅ Campo opcional de fecha de cumpleaños
- ✅ Procesamiento seguro en `consulta.php`

## 🔧 Personalización

Para adaptar este portfolio a tus necesidades:

1. **Información personal**: Edita el contenido en `index.php`
2. **Email de contacto**: Cambia `tu@mail.com` por tu email real
3. **Imagen de perfil**: Reemplaza la imagen en `img/`
4. **Estilos**: Añade tu CSS personalizado
5. **Procesamiento**: Personaliza `consulta.php` según tus necesidades

## 📧 Contacto

Si tienes preguntas o sugerencias sobre este proyecto:

- **Email**: ismaelark98@gmail.com
- **LinkedIn**: [Ismael Amador Serrano](https://www.linkedin.com/in/ismael-amador-serrano-63ba772b4/)
- **GitHub**: [@pequemaquina-ctrl](https://github.com/pequemaquina-ctrl)

## 📝 Licencia

Este proyecto es de código abierto y está disponible bajo la licencia MIT.

## 🌟 Agradecimientos

Proyecto desarrollado como parte del aprendizaje en desarrollo web full stack.

---

**⭐ Si te gusta este proyecto, no olvides darle una estrella en GitHub**
