/**
 * Author:  wwwm.megaravena.net
 * Created: 15/06/2019
 */
DROP DATABASE IF EXISTS intranet2;

CREATE DATABASE intranet2;
USE intranet2;

CREATE TABLE usuarios(
    usuario varchar(12) PRIMARY KEY,
    clave varchar(45) NOT NULL,
    administrador boolean NOT NULL
);

CREATE TABLE datosPersonales(
   usuario varchar(12) PRIMARY KEY,
   apellido varchar (50),
   nombre   varchar(100),
   sexo   varchar(20),
   fechanacimiento date,
   estadocivil  varchar(20),
   direccion  varchar(50),
   localidad  varchar(50),
   provincia varchar(50),
   codigopostal varchar(10),
   nacionalidad varchar(50),
   telefono varchar(100),
   email  varchar(50),  
   fallecido date,
   llego varchar(25),
   recomendadopor varchar(50),
   FOREIGN KEY (usuario) REFERENCES usuarios(usuario)
);

CREATE TABLE datosExtras(
   usuario varchar(12) PRIMARY KEY,
   claveseguridadsocial  varchar(25),
   clavefiscal  varchar(25),
   fuerza  varchar(25),
   jerarquia varchar(25),
   estado varchar(25),
   nrobeneficio varchar(25),
   usuariocaja varchar(50),
   passcaja varchar(50),
   cbu  varchar(25),
   banco varchar(25),
   FOREIGN KEY (usuario) REFERENCES datosPersonales(usuario)
);

 CREATE TABLE Procesos(
     id_proceso INT AUTO_INCREMENT,
     usuario varchar(12),
     fecha  date,
     concepto varchar(20),
     expediente varchar(20),
     carpeta varchar(12),
     nrocarpeta int, 
     PRIMARY KEY (id_proceso),
     FOREIGN KEY (usuario) REFERENCES datosPersonales(usuario)
);


INSERT usuarios VALUES
('23894455','23894455',1),
('24293916','24293916',1),
('31605475','31605475',1),
('18079198','18079198',1);


INSERT INTO datosPersonales VALUES
('23894455', 'Aravena', 'Marcelo Gabriel', 'Masculino','', '','', '', '', '', '','','','','',''),
('24293916', 'Korenberg', 'Emilia Alejandra', 'Femenino','', '','', '', '', '', '','', '', '', '', ''),
('31605475', 'Brodowski', 'Laurita', 'Femenino','', '','', '', '', '', '','', '', '', '', ''),
('18079198', 'Gomez', 'Ronnie Ro', 'Masculino','', '','', '', '', '','','', '', '', '', '');


