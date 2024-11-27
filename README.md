# Sistema de Gestión Escolar

Este es un sistema de gestión escolar desarrollado con **Laravel** para la administración de alumnos, cursos, materias, comisiones y profesores. Permite gestionar el ciclo escolar, asignar cursos a los estudiantes, realizar filtros de búsqueda por diferentes campos y realizar las operaciones CRUD (Crear, Leer, Actualizar, Eliminar) para las entidades del sistema.

## Características
1. Un estudiante puede estar inscrito en múltiples cursos.
2. Un curso agrupa estudiantes que están estudiando una misma materia.
3. Cada curso tiene una o varias comisiones, que son grupos con horarios y aulas
específicas.
4. Cada estudiante solo puede pertenecer a una comisión específica dentro de un
curso.
5. Los profesores están asignados a comisiones

## Requisitos

- PHP 8.0 o superior.
- Composer.
- Node-js v20+
- NPM
- MySQL o cualquier base de datos compatible con Laravel.

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu entorno local:

### 1. Clonar el repositorio

Primero, debes clonar el repositorio en tu máquina local. Abre una terminal y ejecuta el siguiente comando:

```bash
git clone https://github.com/L7R4/Proyecto_Lab.git

```

### 2. Instalar las dependencias
Antes de eso asegurate de estar sobre la carpeta raiz de tu proyecto

Esto instalará todas las dependencias de PHP definidas en composer.json:
```bash
composer install

```
Esto instalará las dependencias de frontend desde package.json:

```bash
npm install

```

### 3. Copia y configura el archivo .env modificando los valores para tu base de datos

Copia el archivo .env.example y renómbralo a .env:
```bash
cp .env.example .env

```
Luego, abre el archivo .env y configura los valores para tu base de datos:
```bash
DB_CONNECTION=######
DB_HOST=########
DB_PORT=#######
DB_DATABASE=#######
DB_USERNAME=#######
DB_PASSWORD=#######

```


### 4. Generar la clave de la aplicación
```bash
php artisan key:generate

```

### 5. Migraciones y datos iniciales

Primero migras las tablas a tu base datos
```bash
php artisan migrate

```
Luego ejecutes el seeder para rellenar las mismas tablas con valores de prueba
```bash
php artisan db:seed

```

### 6. Ejecutar el servidor local

```bash
php artisan serve

```