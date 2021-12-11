#OSCAR URIEL SIERRA, EDGAR NARVAEZ
DROP DATABASE IF EXISTS WEBDB;
CREATE DATABASE WEBDB;
USE WEBDB;

CREATE TABLE Usuarios(
	id INT primary key not null,
    nombre VARCHAR(30) NOT NULL,
    primer_Ap VARCHAR(30) NOT NULL,
    correo VARCHAR(30) NOT NULL,
	password varchar(50) not null 
)ENGINE=InnoDB;

CREATE TABLE Reporte(
	ID INT primary key not null auto_increment,
    iduser int not null,
    titulo VARCHAR(50) NOT NULL,
    descripcion VARCHAR(100) NOT NULL,
    lat VARCHAR(200) NOT NULL,
	lng VARCHAR(200) NOT NULL,
	constraint FK_ID_CUENTA foreign key(iduser)
    references Usuarios(id)
)ENGINE=InnoDB;
DELIMITER //
CREATE TRIGGER create_account
BEFORE insert ON Usuarios FOR EACH ROW 
BEGIN
    declare ready int default 0;
    declare rnd_str int;
    while not ready do
        set rnd_str := round(RAND() * (9999 - 1000)) + 1000;
        if not exists (select * from Usuarios where id = rnd_str) then
            set new.id= rnd_str;
            set ready := 1;
        end if;
    end while;
END//
DELIMITER ;

SELECT* FROM Reporte;
SELECT *FROM Usuarios;