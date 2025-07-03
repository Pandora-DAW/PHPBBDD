-- Creación de una BBDD, con un usuario y unos privilegios

CREATE DATABASE seneca
CHARACTER SET latin1
COLLATE latin1_spanish_ci;
USE seneca;
 CREATE USER "seneca"@"%" identified by "12345";
 GRANT ALL PRIVILEGES ON seneca.* to "seneca"@"%";

 CREATE TABLE alumnos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido1 VARCHAR(30) NOT NULL,
    apellido2 VARCHAR(30),
    fecha_nac DATE,
    email VARCHAR(100)
 );