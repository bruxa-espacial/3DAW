CREATE DATABASE DAWAcademia;
CREATE TABLE alunos(
    id int,
    nome varchar(100),
    matricula varchar(15),
    email varchar(50)
);

INSERT INTO alunos (id, nome, matricula, email)
VALUES (123, 'Mario', '456', 'mario@email.com');