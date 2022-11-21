 CREATE DATABASE webservicered CHARACTER SET utf8 COLLATE utf8_general_ci;
use webservicered ;
 CREATE TABLE usuario(
  id_usuarios  INT PRIMARY KEY AUTO_INCREMENT,
  nombre_completo varchar(40) NOT NULL,
  correo_electronico varchar(50) NOT NULL,
  contrasena varchar(100) NOT NULL,
);
CREATE TABLE notificaciones (
  id_notificaciones INT PRIMARY KEY AUTO_INCREMENT,
  id_usuarios INT,
  FOREIGN KEY usuario (id_usuarios) REFERENCES usuario(id_usuarios)
);
CREATE TABLE perfil (
  id_perfil INT NOT NULL AUTO_INCREMENT,
  id_usuarios INT,
  nombre_foto varchar(200) NOT NULL,
  PRIMARY KEY(id_perfil),
  CONSTRAINT userperfio_FK FOREIGN KEY (id_usuarios) REFERENCES usuario(id_usuarios)
);
CREATE TABLE publicaciones(
  id_publicacion INT PRIMARY KEY AUTO_INCREMENT,
  id_usuarios INT,
  cp longtext NOT NULL,
  fecha_publicacion timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  categoria varchar(200),
  estado longtext NOT NULL,
  ciudad longtext NOT NULL, 
  contenido_publicacion longtext NOT NULL,
  nombre_foto varchar(200) NOT NULL,
  CONSTRAINT userpublicaciones_FK FOREIGN KEY (id_usuarios) REFERENCES usuario(id_usuarios)
);
CREATE TABLE comentarios (
  id_comentario INT PRIMARY KEY AUTO_INCREMENT,
  id_publicaciones INT,
  id_usuarios INT,
  contenido_comentario longtext NOT NULL,
  fecha_comentario timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  CONSTRAINT comenpublicaciones_FK FOREIGN KEY (id_publicaciones) REFERENCES publicaciones(id_publicacion),
  CONSTRAINT usuariopublicaciones_FK FOREIGN KEY (id_usuarios) REFERENCES usuario(id_usuarios)
);
CREATE TABLE likes (
  id_likes INT,
  id_usuarios INT,
  id_publicacions int(11) NOT NULL,
  CONSTRAINT usuariolikes_FK FOREIGN KEY (id_usuarios) REFERENCES usuario(id_usuarios),
  CONSTRAINT publicacioneslikes_FK FOREIGN KEY (id_publicacions) REFERENCES publicaciones(id_publicacion)
);

