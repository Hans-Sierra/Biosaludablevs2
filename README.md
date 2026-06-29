# Laravel E-Commerce Application

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Acerca de la Aplicación

Esta es una plataforma de comercio electrónico (E-Commerce) desarrollada sobre el framework **Laravel**, aprovechando su sintaxis elegante y expresiva para construir un sistema robusto, seguro y escalable.

La aplicación incluye características esenciales para el comercio digital, tales como:
- Gestión de catálogo de productos, categorías y stock.
- Carrito de compras e integración de pasarela de pagos.
- Sistema de autenticación de usuarios y administración de pedidos.
- Arquitectura basada en migraciones de base de datos robustas y un ORM intuitivo (Eloquent).

---

## Requisitos Previos

Antes de comenzar con la instalación en tu entorno local, asegúrate de cumplir con los siguientes requisitos:
- **PHP** (Versión >= 8.2 recomendada)
- **Composer** (Gestor de dependencias de PHP)
- **Node.js** & **NPM** (Para la gestión y compilación de recursos del Frontend)
- **Motor de Base de Datos** (PostgreSQL, MySQL o SQL Server)

---

## Instalación y Configuración en Local

Sigue paso a paso estas instrucciones para clonar el repositorio, configurar el entorno y poner en marcha la aplicación:

### 1. Clonar el Repositorio
Descarga el código fuente del proyecto en tu máquina local:
```bash
git clone <URL_DE_TU_REPOSITORIO>
cd <NOMBRE_DE_LA_CARPETA_DEL_PROYECTO>
```

### 2. Instalar Dependencias de PHP
Instala los paquetes y librerías necesarias para el backend utilizando Composer:
```bash
composer install
```

### 3. Instalar y Compilar Recursos de Frontend
Instala los módulos de Node y compila las hojas de estilo y scripts de JavaScript de la aplicación (Vite):
```bash
npm install
npm run build
```
> 💡 *Nota de Desarrollo:* Si planeas realizar cambios en tiempo real en las vistas o componentes de JavaScript, utiliza el servidor de desarrollo de frontend ejecutando: `npm run dev`

### 4. Configurar el Archivo de Entorno (`.env`)
Copia el archivo de plantilla de entorno para crear tu configuración localizada:
```bash
cp .env.example .env
```

Abre el archivo `.env` en tu editor de código y configura los parámetros de conexión para tu base de datos y la URL de la app:
```env
APP_NAME="Laravel E-Commerce"
APP_ENV=local
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 5. Generar la Clave de la Aplicación
Crea la clave única de encriptación requerida por Laravel para asegurar las sesiones y datos cifrados de los usuarios:
```bash
php artisan key:generate
```

### 6. Ejecutar Migraciones y Seeders
Crea la estructura de tablas necesarias en la base de datos. Si el proyecto cuenta con registros base de prueba (como roles, categorías o productos iniciales), puedes agregar la bandera de seeding:
```bash
php artisan migrate --seed
```

### 7. Crear el Enlace Simbólico de Almacenamiento
Para asegurar que las imágenes de los productos cargadas desde el panel de administración sean visibles públicamente en la tienda, genera el enlace hacia el directorio `public`:
```bash
php artisan storage:link
```

### 8. Iniciar el Servidor de Desarrollo
Con todo configurado, levanta el servidor local de Laravel:
```bash
php artisan serve
```

La aplicación estará disponible de forma inmediata en tu navegador web a través de la dirección: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## Características de Laravel Utilizadas

- **Routing Engine:** Enrutamiento rápido y limpio para el catálogo y pasarelas de pago.
- **Eloquent ORM:** Modelado de datos intuitivo para productos, órdenes y clientes.
- **Database Migrations:** Control de versiones agnóstico para la base de datos de la tienda.
- **Robust Background Jobs:** Procesamiento de colas en segundo plano para el envío de correos de confirmación de facturas y estados de compra.

## Licencia

El framework Laravel es software de código abierto licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT). La lógica de negocio de este e-commerce se rige bajo sus propios términos de contribución.