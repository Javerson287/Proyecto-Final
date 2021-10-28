-- Copia de seguridad
-- Fecha de creació 2021-10-27 17:26:39
-- IP donde se solicita

SET FOREIGN_KEY_CHECKS=0;truncate table ambientes;
truncate table instructores;
truncate table programas;
truncate table usuario;
truncate table prog_inst;
truncate table prestamo_ambientes;
Insert INTO ambientes(no, cede, nom_aula) VALUES('1', 'CDATTG', '04');
Insert INTO ambientes(no, cede, nom_aula) VALUES('2', 'CDATTG', '01');
Insert INTO ambientes(no, cede, nom_aula) VALUES('3', '20 de julio', 'Sala de música');
Insert INTO ambientes(no, cede, nom_aula) VALUES('4', 'Cdattg', 'Informatica');
Insert INTO ambientes(no, cede, nom_aula) VALUES('5', 'CDATTG', '02');
Insert INTO ambientes(no, cede, nom_aula) VALUES('6', 'CDATTG - SENA', '03');
Insert INTO ambientes(no, cede, nom_aula) VALUES('7', 'CDATTG', '01');
Insert INTO ambientes(no, cede, nom_aula) VALUES('8', 'Kilómetro 11', 'Kilómetro 11');
Insert INTO ambientes(no, cede, nom_aula) VALUES('9', 'Cdattg', 'Medio');

Insert INTO instructores(No_documento, nom_instructor) VALUES('143245454', 'Pepito Pérez');
Insert INTO instructores(No_documento, nom_instructor) VALUES('234566767', 'Maria Méndez');
Insert INTO instructores(No_documento, nom_instructor) VALUES('1222333444', 'Luis Rojas');

Insert INTO programas(ficha, nom_programa) VALUES('12345', 'Técnico en desarollo de software');
Insert INTO programas(ficha, nom_programa) VALUES('1879476', 'Multimedia');
Insert INTO programas(ficha, nom_programa) VALUES('2058969', 'ADSI');
Insert INTO programas(ficha, nom_programa) VALUES('3739432', 'Programación');
Insert INTO programas(ficha, nom_programa) VALUES('10232565', 'WinRaR');
Insert INTO programas(ficha, nom_programa) VALUES('37384902', 'Administración de empresas');
Insert INTO programas(ficha, nom_programa) VALUES('146271930', 'Medicina');
Insert INTO programas(ficha, nom_programa) VALUES('284764320', 'Topografía ');
Insert INTO programas(ficha, nom_programa) VALUES('1830123210', 'Antropologia');

Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('1', '2021-10-27 17:13:26', 'camilof1', 'efigueroa@sena.edu.co', 'camilof');
Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('2', '2021-10-27 17:13:29', '12345', 'js.moreno.jsmm@gmail.com', 'YOY');
Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('3', '2021-10-27 17:13:43', '12345', 'damh1006@gmail.com', 'damh');
Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('4', '2021-10-27 17:14:20', '12345', 'heilernova@gmail.com', 'heiler');
Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('5', '2021-10-27 17:14:24', 'Matt21RR', 'portal2matr@gmail.com', 'Matt21RR');
Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('6', '2021-10-27 17:22:56', '12345', 'kevingalindo776@gmail.com', 'root');

Insert INTO prog_inst(ficha, No_documento) VALUES('12345', '143245454');
Insert INTO prog_inst(ficha, No_documento) VALUES('12345', '234566767');
Insert INTO prog_inst(ficha, No_documento) VALUES('2058969', '143245454');
Insert INTO prog_inst(ficha, No_documento) VALUES('2058969', '234566767');
Insert INTO prog_inst(ficha, No_documento) VALUES('10232565', '1222333444');

Insert INTO prestamo_ambientes(fecha_registro, No_documento, hora_ingreso, hora_salida, observaciones, no, id, fecha_prestamo, fecha_devolucion) VALUES('2021-10-27 17:24:55', '143245454', '14:00:00', '16:00:00', '', '9', '5', '2021-10-30', '2021-11-05');
Insert INTO prestamo_ambientes(fecha_registro, No_documento, hora_ingreso, hora_salida, observaciones, no, id, fecha_prestamo, fecha_devolucion) VALUES('2021-10-27 17:25:02', '234566767', '12:00:00', '17:00:00', '', '3', '1', '2021-10-01', '2021-10-31');

SET FOREIGN_KEY_CHECKS=1;