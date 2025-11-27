CREATE DATABASE IF NOT EXISTS tienda_animales;

USE tienda_animales;

CREATE TABLE mascotas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    tipo VARCHAR(30) NOT NULL,
    edad INT NOT NULL,
    disponible BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO mascotas (nombre, tipo, edad, disponible) VALUES
('Luna', 'Perro', 2, TRUE),
('Michi', 'Gato', 3, TRUE),
('Rocky', 'Perro', 1, TRUE),
('Nube', 'Conejo', 1, FALSE),
('Piolin', 'Ave', 4, TRUE);