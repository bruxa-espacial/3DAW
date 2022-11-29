CREATE DATABASE colegio_espacial;

CREATE TABLE `disciplinas` (
  `id_disciplina` int(15) UNIQUE AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `periodo` int DEFAULT NULL,
  `idpre` int DEFAULT NULL,
  `creditos` varchar(10) DEFAULT NULL,
  PRIMARY KEY (id_disciplina)
);

CREATE TABLE `usuarios` (
  `id_usuario` int(15) UNIQUE AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `matricula` int DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `perfil` varchar(100) DEFAULT NULL,
  PRIMARY KEY (id_usuario)
);


CREATE TABLE `user_disc` (
  `id_usuario` int(15),
  `id_disciplina` int(15),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
  FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id_disciplina)
); 
