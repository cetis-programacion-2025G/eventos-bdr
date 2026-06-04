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


INSERT INTO eventos (nombre, fecha, lugar, capacidad, boletos_vendidos)
VALUES
('Concierto de Rock', '2025-07-15', 'Auditorio Nacional', 5000, 3500),
('Festival de Música', '2025-08-10', 'Parque Central', 10000, 7500),
('Conferencia de Tecnología', '2025-09-20', 'Centro de Convenciones', 2000, 1200),
('Expo Emprendedores', '2025-10-05', 'Salón Empresarial', 1500, 900);


INSERT INTO asistentes (nombre, email)
VALUES
('Juan Pérez', 'juanperez@gmail.com'),
('María López', 'marialopez@hotmail.com'),
('Carlos Sánchez', 'carlos.sanchez@yahoo.com'),
('Ana Martínez', 'ana.martinez@gmail.com'),
('Luis Torres', 'luis.torres@hotmail.com');


INSERT INTO inscripciones (id_evento, id_asistente, entradas)
VALUES
(1, 1, 2),
(1, 2, 1),
(2, 3, 3),
(3, 4, 1),
(4, 5, 2),
(2, 1, 1);
