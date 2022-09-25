create database cadastro;
use cadastro;

create table cliente(
id int primary key auto_increment not null,
nome varchar(80) not null,
email varchar(80) not null,
senha varchar(90) not null
);


select *from cliente;

insert into cliente values (null,'pedro antonio','pedro@gmail.com','perito123456');