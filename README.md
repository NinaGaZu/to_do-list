# 🚀 Sistema Básico de Tareas (To-Do List) con PHP y PDO

Este es un proyecto fundamental diseñado para demostrar las habilidades esenciales en **desarrollo backend con PHP** y la interacción segura con bases de datos **MySQL** utilizando la extensión **PDO (PHP Data Objects)**.

## ✨ Características Principales

* **CRUD Completo:** Permite **Crear**, **Leer**, **Actualizar** (marcar como completada/pendiente) y **Eliminar** tareas.
* **Conexión Segura:** Utiliza **Consultas Preparadas (Prepared Statements)** con PDO para prevenir ataques de inyección SQL.
* **Diseño Responsivo:** Interfaz simple y adaptable a dispositivos móviles gracias a CSS moderno.
* **Redirección:** Uso de la función `header('Location: ...')` para manejar las redirecciones después de cada acción (crear, actualizar, eliminar).

## 🛠️ Tecnologías Utilizadas

* **Backend:** PHP 7.4+
* **Base de Datos:** MySQL
* **Conexión:** PDO (PHP Data Objects)
* **Frontend:** HTML5, CSS3

## ⚙️ Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local (XAMPP, WAMP, Laragon, etc.):

### 1. Configuración del Entorno
1.  Asegúrate de tener un servidor local (Apache) y una base de datos (MySQL) corriendo.
2.  Clona o descarga este repositorio en la carpeta `htdocs` (o similar) de tu servidor local.

### 2. Base de Datos
1.  Accede a `phpMyAdmin` o a tu gestor de base de datos.
2.  Crea una nueva base de datos llamada **`todolist_db`**.
3.  Ejecuta la siguiente consulta SQL para crear la tabla `tareas`:

```sql
CREATE TABLE tareas (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(255) NOT NULL,
    creada_en DATETIME DEFAULT CURRENT_TIMESTAMP,
    estado VARCHAR(20) DEFAULT 'pendiente'
);
