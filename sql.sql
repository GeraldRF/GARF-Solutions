ALTER USER 'root'@'localhost' IDENTIFIED BY 'MyNewPass';

CREATE TABLE garf_solutions.mensajes(
id INT AUTO_INCREMENT, 
nombre VARCHAR(40) NOT NULL,
num_telefonico VARCHAR(40), 
email VARCHAR(50) NOT NULL, 
mensaje LONGTEXT NOT NULL, 
grado INT, 
leido BOOL, 
PRIMARY KEY (id));

CREATE OR UPDATE TABLE users(
username VARCHAR(20) NOT NULL,
password VARCHAR(80) NOT NULL, 
PRIMARY KEY(username)
);
INSERT INTO users VALUES('GeraldRF','$2y$10$xhCJpEf3PNgtcmQT17EAd.CpuLfe4C5qwD9BAydB5YAtquwWKqqqC')

-- Crear mensajes
DELIMITER //
CREATE PROCEDURE guardar_mensaje(IN nom VARCHAR(40), IN num VARCHAR(40), IN correo VARCHAR(50), IN msg LONGTEXT)
BEGIN
INSERT INTO `mensajes` VALUES(0, nom, num, correo, msg, 0, false);
END//
DELIMITER ;

CALL guardar_mensaje('nombre', 'num_telefonico', 'correo', 'mensaje');



-- Obtener mensajes
DELIMITER //
CREATE PROCEDURE all_mensajes()
BEGIN
    SELECT * FROM `mensajes`;
END//
DELIMITER ;

CALL all_mensajes();



INSERT INTO `mensajes` VALUES(0, nombre, num_telefonico, email, mensaje, 0, false);