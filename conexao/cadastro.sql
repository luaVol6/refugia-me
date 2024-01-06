create database cadastro;

use cadastro;

create table usuario(
id 			int 			not null 		auto_increment 		primary key,
nome 		varchar(100)	not null,
email 		varchar(100) 	not null,
dataNasc	date			not null, 
senha 		char(18)		not null
);

/*(1, 'Luíza', 'luiza@luiza.com', '2000-10-01', 12345678)*/