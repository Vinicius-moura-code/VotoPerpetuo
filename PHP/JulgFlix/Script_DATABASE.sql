#Criando o BANCO

CREATE DATABASE jugflix;

#CRIAR TABELAS 

CREATE TABLE usuario (
   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nome VARCHAR(45) NOT NULL,
   cpf VARCHAR(12) NOT NULL,
   endereco VARCHAR(50) NOT NULL,
   cidade VARCHAR(50) NOT NULL,
   estado VARCHAR(50) NOT NULL
);
CREATE TABLE animes (
   titulo VARCHAR(45) NOT NULL,
   sinopse VARCHAR(12) NOT NULL,
   genero VARCHAR(50) NOT NULL,
   datal DATE NOT NULL,
   ondassistir VARCHAR(50) NOT NULL,
   pa INT(3) NOT NULL , 
   numtemp INT(3),
   id_user INT NOT NULL
);
CREATE TABLE desenhos (
   titulo VARCHAR(45) NOT NULL,
   sinopse VARCHAR(12) NOT NULL,
   genero VARCHAR(50) NOT NULL,
   datal DATE NOT NULL,
   ondassistir VARCHAR(50) NOT NULL,
   pa INT(3) NOT NULL , 
   numtemp INT(3),
   id_user INT NOT NULL
);
CREATE TABLE filmes (
   titulo VARCHAR(45) NOT NULL,
   sinopse VARCHAR(12) NOT NULL,
   genero VARCHAR(50) NOT NULL,
   datal DATE NOT NULL,
   ondassistir VARCHAR(50) NOT NULL,
   pa INT(3) NOT NULL , 
   numtemp INT(3),
   id_user INT NOT NULL
);
CREATE TABLE series (
   titulo VARCHAR(45) NOT NULL,
   sinopse VARCHAR(12) NOT NULL,
   genero VARCHAR(50) NOT NULL,
   datal DATE NOT NULL,
   ondassistir VARCHAR(50) NOT NULL,
   pa INT(3) NOT NULL , 
   numtemp INT(3),
   id_user INT NOT NULL
);

#INSERINDO A FK DE RELAÇÃO ENTRE USUARIO E FORMULARIOS
ALTER TABLE filmes
ADD FOREIGN KEY (id_user) 
REFERENCES usuario(id);

ALTER TABLE series
ADD FOREIGN KEY (id_user) 
REFERENCES usuario(id);

ALTER TABLE animes
ADD FOREIGN KEY (id_user) 
REFERENCES usuario(id);

ALTER TABLE desenhos
ADD FOREIGN KEY (id_user) 
REFERENCES usuario(id);
