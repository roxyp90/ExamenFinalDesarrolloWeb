# Gestión de Mercado - Sistema de Administración

Un sistema web de gestión para mercados pequeños, desarrollado con Laravel y AdminLTE. Este proyecto es una demostración funcional que permite gestionar clientes, proveedores, productos y facturas sin integración de base de datos, utilizando únicamente JavaScript para la manipulación de datos en el frontend.

## 🚀 Características

### Gestión de Clientes

-   Visualización de clientes en formato de tarjetas
-   Agregar nuevos clientes mediante modal
-   Editar información de clientes existentes
-   Eliminar clientes con confirmación
-   Actualización automática de estadísticas

### Gestión de Proveedores

-   Catálogo de proveedores con información detallada
-   Agregar proveedores con especialidades
-   Editar proveedores existentes
-   Eliminar proveedores
-   Estadísticas de productos, calidad y estado

### Gestión de Productos

-   Catálogo visual de productos en tarjetas
-   Agregar productos con descripción, precio y stock
-   Editar productos existentes
-   Eliminar productos
-   Categorización de productos

### Gestión de Facturas

-   Historial de facturas con estados
-   Generar nuevas facturas con productos dinámicos
-   Cálculo automático de totales
-   Editar facturas existentes
-   Estadísticas de ingresos y facturas pendientes/vencidas

## 🛠 Tecnologías Utilizadas

### Backend

-   **Laravel 10.x** - Framework PHP para el desarrollo web
-   **PHP 8.x** - Lenguaje de programación del servidor
-   **Composer** - Gestor de dependencias PHP

### Frontend

-   **AdminLTE 3** - Tema de administración responsivo
-   **Bootstrap 4** - Framework CSS para diseño responsivo
-   **jQuery 3.x** - Biblioteca JavaScript para manipulación DOM
-   **Font Awesome** - Iconos vectoriales
-   **Chart.js** - Gráficos (preparado para implementación)

### Herramientas de Desarrollo

-   **Vite** - Bundler para assets
-   **Sass** - Preprocesador CSS
-   **NPM** - Gestor de paquetes JavaScript

## 📁 Estructura del Proyecto

```
examenfinaldesarrolloweb/
├── app/                          # Código de la aplicación Laravel
│   ├── Http/Controllers/         # Controladores
│   └── Models/                   # Modelos (no utilizados en demo)
├── public/                       # Archivos públicos
│   ├── backend/                  # Tema AdminLTE
│   │   ├── dist/
│   │   │   ├── css/             # Estilos compilados
│   │   │   └── js/              # JavaScript del tema
│   │   │       ├── clientes.js   # JS gestión clientes
│   │   │       ├── proveedores.js # JS gestión proveedores
│   │   │       ├── productos.js  # JS gestión productos
│   │   │       └── facturas.js   # JS gestión facturas
│   │   └── plugins/             # Plugins de AdminLTE
├── resources/                    # Recursos de la aplicación
│   ├── js/                       # JavaScript fuente
│   ├── sass/                     # Estilos Sass
│   └── views/                    # Vistas Blade
│       ├── layouts/              # Layouts base
│       │   ├── app.blade.php     # Layout principal
│       │   └── app_authentication.blade.php
│       ├── auth/                 # Vistas de autenticación
│       ├── clientes.blade.php    # Vista gestión clientes
│       ├── proveedores.blade.php # Vista gestión proveedores
│       ├── productos.blade.php   # Vista gestión productos
│       ├── facturas.blade.php    # Vista gestión facturas
│       └── welcome.blade.php     # Página de inicio
├── routes/                       # Definición de rutas
│   └── web.php                   # Rutas web
├── database/                     # Migraciones y seeders
├── config/                       # Configuraciones
├── storage/                      # Archivos temporales
├── tests/                        # Pruebas
├── artisan                       # Consola de comandos Laravel
├── composer.json                 # Dependencias PHP
├── package.json                  # Dependencias JavaScript
├── vite.config.js                # Configuración Vite
└── README.md                     # Esta documentación
```

## 📋 Requisitos del Sistema

-   **PHP**: 8.1 o superior
-   **Composer**: 2.x
-   **Node.js**: 16.x o superior
-   **NPM**: 8.x o superior
-   **Servidor Web**: Apache/Nginx con mod_rewrite

## 🚀 Instalación y Configuración

### 1. Clonar el Repositorio

```bash
git clone <url-del-repositorio>
cd examenfinaldesarrolloweb
```

### 2. Instalar Dependencias PHP

```bash
composer install
```

### 3. Instalar Dependencias JavaScript

```bash
npm install
```

### 4. Configurar Variables de Entorno

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Compilar Assets

```bash
npm run build
# o para desarrollo
npm run dev
```

### 6. Iniciar Servidor de Desarrollo

```bash
php artisan serve
```

Accede a la aplicación en: `http://localhost:8000`

## 📖 Uso del Sistema

### Navegación

-   **Home**: Página de inicio con resumen general
-   **Clientes**: Gestión completa de clientes
-   **Proveedores**: Administración de proveedores
-   **Productos**: Catálogo de productos
-   **Facturas**: Historial y creación de facturas

### Funcionalidades Interactivas

1. **Agregar Elementos**: Usa los botones "Agregar" en cada sección
2. **Editar Elementos**: Haz clic en "Editar" en cualquier elemento
3. **Eliminar Elementos**: Confirma la eliminación con "Eliminar"
4. **Generar Facturas**: Agrega productos dinámicamente y calcula totales automáticamente

## 🔧 Desarrollo

### Comandos Útiles

```bash
# Limpiar cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Compilar assets para producción
npm run build

# Ejecutar pruebas
php artisan test
```

### Estructura JavaScript

Los archivos JavaScript están organizados por funcionalidad:

-   `clientes.js`: Gestión de clientes (agregar, editar, eliminar)
-   `proveedores.js`: Gestión de proveedores con estadísticas
-   `productos.js`: Gestión de productos
-   `facturas.js`: Gestión de facturas con cálculos dinámicos

## 📝 Historial de Cambios (Commits)

### Historial de Commits (git log --oneline)

```
eb439e0 haciendo commit de la vista factura funcionalidad terminada
1a40678 funcionalidad en la vista de producto haciendo commit
dd9aac3 subiendo funcionalidad en vista clientes
3a7f13e terminado
7182ace terminando el proyecto con sus respectivas vistas
87d7e32 first commit
```

### Detalle de Cambios por Commit

#### eb439e0 - Vista Factura Funcionalidad Terminada

-   Implementación completa de la gestión de facturas
-   Sistema de productos dinámicos en facturas
-   Cálculos automáticos de totales
-   Estadísticas de facturas (totales, ingresos, pendientes, vencidas)
-   Funcionalidad de editar y eliminar facturas

#### 1a40678 - Funcionalidad Vista Producto

-   Catálogo interactivo de productos
-   Sistema de agregar/editar/eliminar productos
-   Tarjetas visuales para productos
-   Validación de formularios
-   Categorización de productos

#### dd9aac3 - Funcionalidad Vista Clientes

-   Gestión completa de clientes
-   Sistema de tarjetas para visualización
-   Funcionalidad CRUD (Crear, Leer, Actualizar, Eliminar)
-   Estadísticas de clientes
-   Interfaz responsiva

#### 3a7f13e - Terminado

-   Finalización de componentes principales
-   Optimización de código
-   Preparación para entrega

#### 7182ace - Proyecto con Vistas Respectivas

-   Desarrollo de vistas principales (clientes, proveedores, productos, facturas)
-   Implementación de layouts base
-   Estilos personalizados con paleta de colores del tema
-   Navegación y estructura de menús

#### 87d7e32 - First Commit

-   Configuración inicial del proyecto Laravel
-   Instalación y configuración de AdminLTE
-   Estructura base de directorios
-   Configuración de dependencias

## 🎨 Tema y Diseño

### Paleta de Colores

-   **Primario**: `#D97A26` (Naranja)
-   **Secundario**: `#688B3E` (Verde)
-   **Accent**: `#E8C547` (Amarillo)
-   **Texto**: `#4A2E14` (Marrón oscuro)
-   **Fondo**: `#fafafa` (Gris claro)

### Componentes UI

-   Tarjetas para elementos individuales
-   Modales para formularios
-   Tablas para listados
-   Estadísticas con iconos
-   Navegación responsiva

## ⚠️ Notas Importantes

### Limitaciones de la Demo

-   **Sin Base de Datos**: Los datos se manejan únicamente en memoria del navegador
-   **Sin Persistencia**: Los cambios se pierden al recargar la página
-   **Sin Autenticación**: No implementado para fines de demostración
-   **Sin Validación Backend**: Toda la lógica es frontend

### Próximas Mejoras Sugeridas

-   Integración con base de datos MySQL/PostgreSQL
-   Sistema de autenticación de usuarios
-   API REST para operaciones CRUD
-   Generación de PDFs para facturas
-   Sistema de inventario real
-   Dashboard con gráficos interactivos

## 🤝 Contribución

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit tus cambios (`git commit -am 'Agrega nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto es de uso educativo y no tiene restricciones de licencia.

## 👥 Autor

Proyecto desarrollado como parte del examen final de desarrollo web.

---

**Nota**: Este es un proyecto de demostración. Para un sistema de producción, se recomienda implementar persistencia de datos, validación backend y medidas de seguridad apropiadas.
