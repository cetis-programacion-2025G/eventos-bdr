CREATE DATABASE eventos_bdr;
USE eventos_bdr;

CREATE TABLE eventos (
    id_evento INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    lugar VARCHAR(150) NOT NULL,
    capacidad INT NOT NULL,
    boletos_vendidos INT DEFAULT 0
);

CREATE TABLE asistentes (
    id_asistente INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL 
);

CREATE TABLE inscripciones (
    id_inscripcion INT AUTO_INCREMENT PRIMARY KEY,
    id_evento INT NOT NULL,
    id_asistente INT NOT NULL,
    entradas INT NOT NULL,
    FOREIGN KEY (id_evento) 
        REFERENCES eventos(id_evento)
        ON DELETE CASCADE,
        FOREIGN KEY (id_asistente)
        REFERENCES asistentes(id_asistente)
        ON DELETE CASCADE
);
