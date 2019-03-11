create database cena_noticias;

use database cena_noticias;

create table noticias 
(
id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
categoria_id INT (11) NOT NULL,
titulo VARCHAR (255) NOT NULL,
texto TEXT NOT NULL,
foto TEXT
);

create table categorias
(
id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (255) NOT NULL
);
