/**
 * Author:  wwwm.mgaravena.net
 * Created: 15/06/2019
 */
DROP DATABASE IF EXISTS prueba;

CREATE DATABASE prueba;
USE prueba;

CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT,
    usuario varchar(12),
    clave varchar(45) NOT NULL,
    administrador boolean NOT NULL,
    PRIMARY KEY (id_usuario),
    FOREIGN KEY (usuario) REFERENCES persona(usuario)
);

CREATE TABLE personas(
   usuario varchar(12) PRIMARY KEY,
   apellido varchar (50),
   nombre   varchar(100),
   sexo   varchar(20),
   fechanacimiento varchar(25),
   estadocivil  varchar(20),
   direccion  varchar(50),
   localidad  varchar(50),
   provincia varchar(50),
   codigopostal varchar(10),
   nacionalidad varchar(50),
   telefono varchar(100),
   email  varchar(50),  
   fallecido varchar(25)
);

CREATE TABLE clientes(
   id_cliente INT AUTO_INCREMENT,
   usuario varchar(12),
   fuerza  varchar(25),
   jerarquia varchar(25),
   estado varchar(25),
   cbu  varchar(25),
   banco varchar(25),
   claveseguridadsocial  varchar(25),
   clavefiscal  varchar(25),
   PRIMARY KEY (id_cliente),
   FOREIGN KEY (usuario) REFERENCES personas(usuario)
);

CREATE TABLE usuarioscaja(
   id_caja INT AUTO_INCREMENT,
   usuario varchar(12),
   usuariocaja varchar(50),
   passcaja varchar(50),
   estado varchar(256),
   nrobeneficio varchar(25),
   PRIMARY KEY (id_caja),
   FOREIGN KEY (usuario) REFERENCES personas(usuario)
);

 CREATE TABLE procesos(
     id_proceso INT AUTO_INCREMENT,
     usuario varchar(12),
     fecha  date,
     concepto varchar(20),
     expediente varchar(20),
     carpeta varchar(12),
     nrocarpeta int, 
     PRIMARY KEY (id_proceso),
     FOREIGN KEY (usuario) REFERENCES personas(usuario)
);

 CREATE TABLE movimientos(
     id_movimiento INT AUTO_INCREMENT,
     fecha  varchar(25),
     codigodebarras varchar(50),
     referencia varchar(50),
     monto decimal,
     cuenta varchar(30), 
     mediodepago varchar(50),
     PRIMARY KEY (id_movimiento)
);


INSERT usuarios VALUES
(null,'23894455','23894455',1),
(null,'24293916','24293916',0),
(null,'31605475','31605475',1),
(null,'18079198','18079198',1);


INSERT INTO personas VALUES
('23894455', 'Aravena', 'Marcelo Gabriel', 'Masculino','', '','', '', '', '', '','','',''),
('24293916', 'Korenberg', 'Emilia Alejandra', 'Femenino','', '','', '', '', '', '','', '', ''),
('31605475', 'Brodowski', 'Laurita', 'Femenino','', '','', '', '', '', '','', '', ''),
('18079198', 'Gomez', 'Ronnie Ro', 'Masculino','', '','', '', '', '','','', '', '');