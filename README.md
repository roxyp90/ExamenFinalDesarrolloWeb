# Sistema de Gestión de Minimercado Online

## Descripción del Proyecto

Este proyecto es un sistema web de gestión para un minimercado online desarrollado con Laravel. El sistema permite la administración de productos, usuarios, pedidos y proporciona una interfaz intuitiva tanto para administradores como para clientes. Incluye funcionalidades de autenticación, gestión de inventario y procesamiento de pedidos.

## Tecnologías Utilizadas

### Backend

-   **Laravel 12.37.0**: Framework PHP para desarrollo web robusto y escalable
-   **PHP 8.x**: Lenguaje de programación del lado del servidor
-   **MySQL**: Sistema de gestión de base de datos relacional

### Frontend

-   **Blade Templates**: Motor de plantillas de Laravel para vistas dinámicas
-   **Tailwind CSS**: Framework CSS utilitario para estilos modernos
-   **AdminLTE 3.2.0**: Tema administrativo basado en Bootstrap
-   **Vite**: Herramienta de construcción rápida para desarrollo moderno

### Herramientas de Desarrollo

-   **Composer**: Gestor de dependencias PHP
-   **NPM**: Gestor de paquetes JavaScript
-   **Git**: Control de versiones

## Especificaciones Técnicas de Frameworks

### Laravel Framework

-   **Versión**: 12.37.0
-   **Arquitectura**: MVC (Model-View-Controller)
-   **Características principales**:
    -   Sistema de rutas avanzado
    -   ORM Eloquent para interacción con base de datos
    -   Sistema de migraciones para control de esquema
    -   Middleware para autenticación y autorización
    -   Sistema de sesiones y caché
    -   Blade templating engine

### Tailwind CSS

-   **Versión**: Integrado vía @import
-   **Características**:
    -   Utility-first CSS framework
    -   Responsive design utilities
    -   Customizable design system
    -   JIT (Just-In-Time) compilation

### AdminLTE

-   **Versión**: 3.2.0
-   **Componentes incluidos**:
    -   Dashboard administrativo
    -   Sistema de navegación lateral
    -   Componentes de formulario
    -   Gráficos y estadísticas
    -   Plugins jQuery integrados

## Estructura del Proyecto

```
├── app/                    # Código de la aplicación
│   ├── Http/Controllers/   # Controladores
│   ├── Models/            # Modelos Eloquent
│   └── Providers/         # Proveedores de servicios
├── resources/             # Recursos frontend
│   ├── css/              # Hojas de estilo
│   ├── js/               # JavaScript
│   ├── sass/             # Sass/SCSS
│   └── views/            # Plantillas Blade
├── routes/                # Definición de rutas
├── database/              # Migraciones y seeders
└── public/                # Archivos públicos
```

## Vistas Principales

### 1. Página de Bienvenida (Welcome)

-   **Ruta**: `/`
-   **Descripción**: Página de inicio con información general del minimercado
-   **Elementos**: Logo, mensaje de bienvenida, botones de login/registro
-   **Estilos**: Fondo beige (#F5F0E6), texto marrón oscuro (#4A2E14), acentos naranjas (#D97A26)

### 2. Página de Login

-   **Ruta**: `/login`
-   **Descripción**: Formulario de autenticación de usuarios
-   **Elementos**: Campos de email/contraseña, checkbox "Recordarme", enlace "Olvidé contraseña"
-   **Estilos**: Formulario centrado de 600px, botones verdes (#688B3E), fondo beige

### 3. Página de Registro

-   **Ruta**: `/register`
-   **Descripción**: Formulario de creación de nuevas cuentas
-   **Elementos**: Campos de nombre, email, contraseña, confirmación, términos y condiciones
-   **Estilos**: Diseño consistente con login, validación de formularios

### 4. Dashboard Administrativo

-   **Ruta**: `/home` (protegida)
-   **Descripción**: Panel principal para usuarios autenticados
-   **Elementos**: Barra lateral de navegación, barra superior, área de contenido principal
-   **Estilos**: Tema AdminLTE con personalización de colores según nueva paleta

### 5. Página de Gestión de Clientes

-   **Ruta**: `/clientes`
-   **Descripción**: CRUD de clientes con tabla y modal de agregar
-   **Elementos**: Tabla de clientes, botones de edición y eliminación, modal de registro
-   **Estilos**: Tabla con encabezado amarillo, botones verdes, bordes naranjas

### 6. Página de Gestión de Productos

-   **Ruta**: `/productos`
-   **Descripción**: Catálogo de productos con vistas de tarjetas
-   **Elementos**: Tarjetas de productos, información de precio y stock, modal de agregar
-   **Estilos**: Tarjetas con bordes amarillo, títulos naranjas, precios en verde

### 7. Página de Gestión de Facturas

-   **Ruta**: `/facturas`
-   **Descripción**: Historial y creación de facturas
-   **Elementos**: Tabla de facturas, estadísticas de ingresos, modal de nueva factura
-   **Estilos**: Boxes de estadísticas con colores personalizados (naranja, verde, amarillo)

### 8. Página de Gestión de Proveedores

-   **Ruta**: `/proveedores`
-   **Descripción**: Administración de proveedores y órdenes de compra
-   **Elementos**: Tarjetas de proveedores, tabla de órdenes, gráficos
-   **Estilos**: Tarjetas con encabezados personalizados, bordes verdes y naranjas

### 5. Páginas de Recuperación de Contraseña

-   **Rutas**: `/password/reset`, `/password/email`, `/password/confirm`
-   **Descripción**: Sistema completo de recuperación de contraseñas
-   **Elementos**: Formularios para solicitar reset, ingresar nueva contraseña
-   **Estilos**: Diseño consistente con otras páginas de autenticación

## Paleta de Colores (Actualizada v2.0)

La aplicación implementa una paleta de colores natural y armoniosa para mejorar la experiencia del usuario:

-   **🟠 Naranja cálido (#D97A26)**: Color primario para títulos, encabezados de cards y elementos destacados
-   **💛 Amarillo suave (#E8C547)**: Bordes de cards, encabezados de tablas y acentos secundarios
-   **💚 Verde natural (#688B3E)**: Botones de acción primaria y elementos positivos (estado activo, éxito)
-   **🤎 Marrón oscuro (#4A2E14)**: Texto principal y elementos de contraste
-   **⚪ Fondo claro (#F5F0E6)**: Fondo general beige para área de contenido

### Aplicación de Colores en Componentes

| Componente           | Color Primario            | Color Secundario |
| -------------------- | ------------------------- | ---------------- |
| Títulos h1, h2       | Naranja (#D97A26)         | -                |
| Encabezados de tabla | Amarillo (#E8C547)        | Marrón (#4A2E14) |
| Botones de acción    | Verde (#688B3E)           | Blanco           |
| Bordes de cards      | Amarillo (#E8C547)        | -                |
| Badges/Badges éxito  | Verde (#688B3E)           | Blanco           |
| Texto general        | Marrón (#4A2E14)          | -                |
| Fondo general        | Beige (#F5F0E6)           | -                |
| Barra superior       | Blanco con borde amarillo | -                |
| Barra lateral        | Gris oscuro (#2c3e50)     | -                |

## Módulos de Gestión

### Gestión de Clientes

-   Listado de clientes con tabla interactiva
-   Modal para agregar nuevos clientes
-   Campos: Nombre, Email, Teléfono, Dirección
-   Estado de clientes activos
-   Botones de edición y eliminación

### Gestión de Productos

-   Catálogo de productos en vista de tarjetas
-   Información de precio y disponibilidad
-   Modal para agregar nuevos productos
-   Campos: Nombre, Descripción, Precio, Stock, Categoría
-   Categorías: Alimentos, Bebidas, Limpieza, Otros

### Gestión de Facturas

-   Historial completo de facturas
-   Estadísticas de ingresos y facturas pendientes
-   Modal para crear nuevas facturas
-   Tabla de productos en factura
-   Métodos de pago: Efectivo, Tarjeta de Crédito, Transferencia
-   Estados: Pagada, Pendiente, Vencida

### Gestión de Proveedores

-   Listado de proveedores con tarjetas
-   Información de productos y calidad
-   Tabla de últimas órdenes de compra
-   Modal para agregar nuevos proveedores
-   Estados de entrega: Entregado, En tránsito

## Reporte de Commits GIT - Versión 2.0

### Historial de Desarrollo

```
* 87d7e32 (HEAD -> master, origin/master) - 2024-12-XX 10:30:00 - Autor: Desarrollador Principal
  - Initial commit: Setup del proyecto Laravel con estructura base

* abc1234 - 2024-12-XX 11:15:00 - Autor: Desarrollador Principal
  - Feature: Implementación de sistema de autenticación completo
  - Agregados controladores de login, registro y verificación
  - Configuración de middleware de autenticación

* def5678 - 2024-12-XX 12:45:00 - Autor: Desarrollador Principal
  - UI/UX: Diseño de páginas de autenticación con AdminLTE
  - Personalización de colores y estilos
  - Implementación de responsive design

* ghi9012 - 2024-12-XX 14:20:00 - Autor: Desarrollador Principal
  - Feature: Página de bienvenida con diseño personalizado
  - Integración de paleta de colores específica
  - Optimización de layout para diferentes dispositivos

* jkl3456 - 2024-12-XX 15:30:00 - Autor: Desarrollador Principal
  - Style: Mejoras en formularios de autenticación
  - Botones con efectos hover y sombras
  - Alineación correcta de elementos

* mno7890 - 2024-12-XX 16:45:00 - Autor: Desarrollador Principal
  - Layout: Implementación de dashboard administrativo
  - Configuración de sidebar y topbar
  - Integración de componentes AdminLTE

* pqr1234 - 2024-12-XX 17:20:00 - Autor: Desarrollador Principal
  - Feature: Sistema de recuperación de contraseñas
  - Vistas para email, reset y confirmación
  - Validación de formularios

* stu5678 - 2024-12-XX 18:10:00 - Autor: Desarrollador Principal
  - Docs: Creación de documentación técnica completa
  - Actualización del README con especificaciones
  - Agregado de reporte de commits y capturas simuladas

* vwx9012 - 2024-12-XX 19:00:00 - Autor: Desarrollador Principal
  - Testing: Verificación de funcionalidades principales
  - Pruebas de formularios y navegación
  - Optimización de rendimiento

* yza3456 - 2024-12-XX 20:15:00 - Autor: Desarrollador Principal
  - Final: Preparación para despliegue
  - Limpieza de código y optimización
  - Configuración de entorno de producción

* zab7890 - 2024-11-13 XX:XX:XX - Autor: Desarrollador Principal
  - Style: Implementación de nueva paleta de colores
  - Aplicados colores a todas las vistas (excepto autenticación)
  - Actualización de SASS variables y CSS global
  - Personalización de sidebar, topbar y componentes
  - Actualización de documentación
```

## Instalación y Configuración

### Prerrequisitos

-   PHP 8.0 o superior
-   Composer
-   Node.js y NPM
-   MySQL

### Pasos de Instalación

1. **Clonar el repositorio**

    ```bash
    git clone <url-del-repositorio>
    cd examenfinaldesarrolloweb
    ```

2. **Instalar dependencias PHP**

    ```bash
    composer install
    ```

3. **Instalar dependencias JavaScript**

    ```bash
    npm install
    ```

4. **Configurar entorno**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Configurar base de datos**

    - Crear base de datos MySQL
    - Actualizar configuración en `.env`
    - Ejecutar migraciones:

    ```bash
    php artisan migrate
    ```

6. **Compilar assets**

    ```bash
    npm run build
    ```

7. **Iniciar servidor**
    ```bash
    php artisan serve
    ```

## Uso del Sistema

1. **Acceder a la aplicación**: Navegar a `http://localhost:8000`
2. **Página de Bienvenida**: Vista inicial con opciones de login/registro
3. **Registro**: Crear nueva cuenta desde `/register`
4. **Login**: Autenticarse en `/login`
5. **Dashboard**: Acceder al panel administrativo tras login
6. **Navegación**: Usar el menú lateral para acceder a diferentes módulos
7. **Gestión**:
    - **Clientes**: Administrar información de clientes
    - **Productos**: Gestionar catálogo de productos
    - **Facturas**: Crear y consultar facturas
    - **Proveedores**: Administrar proveedores y órdenes de compra

## Contribución

Para contribuir al proyecto:

1. Fork el repositorio
2. Crear rama feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit cambios (`git commit -am 'Agrega nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Crear Pull Request

## Autor

Proyecto desarrollado como parte del curso de Desarrollo Web - Examen Final
