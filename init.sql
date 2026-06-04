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
('Concierto Primavera', '2026-06-15', 'Auditorio Central', 200, 45),
('Feria del Libro', '2026-06-20', 'Biblioteca Municipal', 100, 67),
('Torneo de Robótica', '2026-07-05', 'CETIS Auditorio', 50, 30),
('Obra de Teatro Escolar', '2026-07-12', 'Salón de Actos', 80, 15);

INSERT INTO asistentes (nombre, email)
VALUES
('Ana López', 'ana@ejemplo.com'),
('Carlos Pérez', 'carlos@ejemplo.com'),
('Sofía Torres', 'sofia@ejemplo.com'),
('Luis García', 'luis@ejemplo.com'),
('María Sánchez', 'maria@ejemplo.com');

INSERT INTO inscripciones (id_evento, id_asistente, entradas)
VALUES
(1, 1, 1),
(1, 2, 1),
(2, 3, 1),
(2, 4, 1),
(3, 5, 1);
