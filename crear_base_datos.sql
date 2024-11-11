CREATE DATABASE InicioSesion;

USE InicioSesion;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(50) NOT NULL
);

INSERT INTO usuarios (correo, contrasena) 
VALUES ('david@gmail.com', '1234');