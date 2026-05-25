# 🧠 PYCODS

PYCODS es una plataforma educativa interactiva enfocada en enseñar programación básica en Python a niños con Trastorno del Espectro Autista (TEA) mediante juegos, gamificación y aprendizaje visual.

El proyecto combina diseño moderno tipo videojuego educativo con ejercicios interactivos, sistema de experiencia (XP), minijuegos y paneles dinámicos.

---

# 🚀 Tecnologías Utilizadas

## Frontend
- HTML5
- CSS3
- Bootstrap 5
- JavaScript

## Backend
- PHP

## Base de Datos
- MariaDB / MySQL

## Servidor Local
- XAMPP

---

# 🎮 Funcionalidades

✅ Sistema de Login y Registro  
✅ Dashboard interactivo  
✅ Juegos educativos  
✅ Sistema de XP  
✅ Ejercicios de Python  
✅ Juego de Memoria  
✅ Condicionales interactivos  
✅ Bucles interactivos  
✅ Diseño responsive  
✅ Interfaz moderna tipo Duolingo  

---

# 📁 Estructura del Proyecto

```bash
pycods/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
│
├── config/
│   └── db.php
│
├── ejercicios/
│   ├── condicionales.php
│   └── bucles.php
│
├── juegos/
│   └── memoria.php
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── sidebar.php
│
├── login.php
├── register.php
├── dashboard.php
├── logout.php
└── README.md
```

---

# ⚙️ Requisitos

Antes de ejecutar el proyecto debes instalar:

- XAMPP
- PHP 8+
- MariaDB/MySQL
- Navegador web moderno

---

# 🛠 Instalación en XAMPP

# 1️⃣ Descargar XAMPP

Descargar desde:

https://www.apachefriends.org/es/index.html

---

# 2️⃣ Iniciar Servicios

Abrir XAMPP Control Panel y activar:

✅ Apache  
✅ MySQL  

---

# 3️⃣ Copiar Proyecto

Copiar la carpeta:

```bash
pycods
```

dentro de:

```bash
C:\xampp\htdocs\
```

Debe quedar así:

```bash
C:\xampp\htdocs\pycods
```

---

# 4️⃣ Crear Base de Datos

Abrir:

http://localhost/phpmyadmin

Crear base de datos:

```sql
CREATE DATABASE pycods;
```

---

# 5️⃣ Configurar Conexión

Editar:

```bash
config/db.php
```

Ejemplo:

```php
<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "pycods"
);

if(!$conn){
    die("Error de conexión");
}
?>
```

---

# 6️⃣ Ejecutar Proyecto

Abrir en el navegador:

## Si usas puerto 80

```txt
http://localhost/pycods
```

## Si usas puerto 8080

```txt
http://localhost:8080/pycods
```

---

# 🎨 Características Visuales

- Diseño tipo videojuego
- Interfaz amigable para niños
- Colores suaves
- Accesibilidad visual
- Botones grandes
- Tarjetas animadas
- UX inspirada en Duolingo

---

# 🧩 Juegos Incluidos

## 🧠 Juego de Memoria
El usuario debe encontrar parejas relacionadas con programación.

## 🤖 Ejercicios Interactivos
- Condicionales
- Bucles
- Validación automática
- XP y recompensas

---

# 📚 Objetivo Educativo

El proyecto busca facilitar el aprendizaje de programación mediante experiencias visuales y dinámicas enfocadas en:

- Pensamiento lógico
- Concentración
- Motivación
- Aprendizaje progresivo
- Inclusión tecnológica

---

# 🔒 Seguridad

- Validación de formularios
- Sesiones PHP
- Protección básica de login

---

# 📱 Responsive

La aplicación funciona en:

✅ Computadores  
✅ Tablets  
✅ Celulares  

---

# 👨‍💻 Autor

Proyecto desarrollado por:

Alejandro Calderón

---

# 📌 Estado del Proyecto

🚧 En desarrollo

Próximas mejoras:

- Sistema de niveles
- Monstruo personalizable
- Ranking online
- Sonidos interactivos
- Guardado de XP en base de datos
- Mapa tipo Duolingo

---
