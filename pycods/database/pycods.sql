USE pycods;

CREATE TABLE usuarios(

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100),

    email VARCHAR(100) UNIQUE,

    password VARCHAR(255),

    rol ENUM(
        'admin',
        'docente',
        'estudiante',
        'invitado'
    ) DEFAULT 'estudiante',

    avatar VARCHAR(255),

    nivel INT DEFAULT 1,

    xp INT DEFAULT 0,

    monedas INT DEFAULT 0,

    vidas INT DEFAULT 5,

    racha INT DEFAULT 0,

    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE ejercicios(

    id INT AUTO_INCREMENT PRIMARY KEY,

    titulo VARCHAR(255),

    descripcion TEXT,

    ejemplo TEXT,

    respuesta_correcta TEXT,

    xp INT DEFAULT 10,

    nivel INT DEFAULT 1
);

CREATE TABLE progreso(

    id INT AUTO_INCREMENT PRIMARY KEY,

    usuario_id INT,

    ejercicio_id INT,

    completado BOOLEAN DEFAULT 0,

    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY(usuario_id) REFERENCES usuarios(id),

    FOREIGN KEY(ejercicio_id) REFERENCES ejercicios(id)
);

CREATE TABLE logros(

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100),

    descripcion TEXT,

    icono VARCHAR(255),

    recompensa_xp INT DEFAULT 20
);

CREATE TABLE recompensas(

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100),

    descripcion TEXT,

    monedas INT DEFAULT 10
);

CREATE TABLE monstruos(

    id INT AUTO_INCREMENT PRIMARY KEY,

    usuario_id INT,

    ojos VARCHAR(100),

    boca VARCHAR(100),

    color VARCHAR(100),

    accesorio VARCHAR(100),

    FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
);