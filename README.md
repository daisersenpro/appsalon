# AppSalon  Sistema de Turnos para Barbería-Peluqueria-Spa

 <img width="1524" height="735" alt="Web-App-Salon" src="https://github.com/user-attachments/assets/87043cb0-0a7c-402b-967c-d71cff838d5c" />

AppSalon es una aplicación web completa para la gestión de citas en una barbería. Está construida con una arquitectura MVC ligera en PHP, utiliza Composer para autoload (PSR-4), y cuenta con una canalización de frontend basada en SASS y Gulp para compilar estilos y optimizar imágenes.

**Características principales**
- Gestión de citas: crear, ver y administrar turnos por cliente y fecha.
- Gestión de usuarios: registro, inicio de sesión y recuperación de contraseña.
- Interfaz responsive y plantillas reutilizables de vistas.
- Pipeline de assets: SASS  CSS, optimización de imágenes (AVIF/WebP) y bundling de JS.

**Tecnologías**
- PHP (MVC, PSR-4)
- Composer (autoload)
- MySQL (ej. XAMPP)
- Node.js, npm, Gulp, SASS

**Instalación rápida (desarrollo)**
1. Clona el repositorio y entra a la carpeta del proyecto:

```bash
git clone <tu-repo-url>
cd AppSalon
```

2. Instala dependencias PHP y JavaScript:

```bash
composer install
npm install
```

3. Genera el autoload de Composer:

```bash
composer dump-autoload
```

4. Compila assets (SASS / JS / imágenes):

```bash
npx gulp
# o
npm run dev
```

5. Configura la base de datos en `includes/database.php` (host, puerto, usuario, nombre de DB).

6. Ejecuta el servidor PHP para desarrollo (sirve `public/`):

```bash
php -S localhost:3000 -t public
```

7. Abre `http://localhost:3000` en tu navegador.

**Notas**
- Si usas XAMPP y MySQL corre en otro puerto (por ejemplo `3307`), actualiza `includes/database.php`.
- Asegúrate de crear la base de datos y tablas necesarias antes de usar la app.

**Contribuir**
- Abre un issue o PR con cambios claros. Mantén commits pequeños y mensajes en español.

---

Si quieres, agrego:
- SQL de creación de la base de datos y tablas.
- Un archivo `env.example` y guía de variables.
- Commit y push de estos cambios cuando me lo indiques.
