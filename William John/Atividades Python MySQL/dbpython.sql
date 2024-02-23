drop database if exists dbpython;

create database dbpython;

create table dbpython.contatos(
	id int primary key auto_increment,
    nome varchar(255),
    email varchar(255),
    telefone varchar(255)
) engine = innodb;