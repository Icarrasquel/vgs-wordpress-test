# VGS WordPress Test

Prueba técnica desarrollada sobre WordPress utilizando el starter theme `_tw` y Tailwind CSS.

## Tecnologías utilizadas

* WordPress
* PHP
* Tailwind CSS
* Node.js / NPM
* Starter Theme `_tw`
* Git

## Funcionalidades implementadas

### Custom Post Type: Productos

Se ha registrado un Custom Post Type llamado **Productos** con soporte para:

* Título
* Descripción
* Imagen destacada

### Home personalizada

Se ha desarrollado una página de inicio basada en el diseño proporcionado en Figma.

### Loop de Productos

La sección de productos destacados muestra los últimos 6 productos publicados mediante una consulta personalizada utilizando `WP_Query`.

### Componentes reutilizables

Las tarjetas de producto fueron implementadas como componentes reutilizables utilizando:

```php
get_template_part()
```

### Vista individual de Producto

Se ha implementado una plantilla específica:

```text
single-producto.php
```

para visualizar los productos individualmente.

### Diseño Responsive

La interfaz fue adaptada para escritorio, tablet y dispositivos móviles utilizando Tailwind CSS.

---

## Requisitos

* PHP 8.1 o superior
* WordPress 6.x
* Node.js
* NPM

---

## Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/Icarrasquel/vgs-wordpress-test.git
```

### 2. Copiar el tema

Copiar la carpeta del tema dentro de:

```text
wp-content/themes/
```

### 3. Instalar dependencias

Desde la carpeta del tema:

```bash
npm install
```

### 4. Ejecutar entorno de desarrollo

```bash
npm run dev
```

### 5. Generar assets para producción

```bash
npm run build
```

### 6. Activar el tema

Desde el panel de administración de WordPress:

```text
Apariencia → Temas
```

Activar:

```text
VGS WordPress Test
```

---

## Contenido de demostración

Dentro de la carpeta:

```text
demo-content/
```

se incluye el archivo XML de exportación utilizado para importar los productos de prueba y facilitar la evaluación del proyecto.

---

## Estructura principal

```text
template-parts/
├── components/
│   └── product-card.php
├── home/
│   ├── hero.php
│   ├── benefits.php
│   ├── products.php
│   ├── quote-form.php
│   ├── about.php
│   ├── testimonials.php
│   └── cta.php
└── layout/
    ├── top-bar.php
    ├── navigation.php
    ├── header-content.php
    └── footer-content.php
```

---

## Decisiones técnicas

* Se utilizó el starter theme `_tw` como base del desarrollo.
* Se empleó Tailwind CSS para la maquetación.
* No se utilizaron Page Builders.
* Los productos fueron implementados mediante un Custom Post Type.
* El CPT Productos fue registrado mediante código en `inc/post-types.php`.
* Se priorizó una estructura modular basada en componentes reutilizables para facilitar el mantenimiento y la escalabilidad del proyecto.

---

## Autor

Isaac Carrasquel
