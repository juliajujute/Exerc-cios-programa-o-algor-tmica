CREATE DATABASE db_website; #cria o banco
USE  db_website; #seleciona o banco para seer usado

#cria tabela
CREATE table usuários(
	id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL


)

