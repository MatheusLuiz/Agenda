create database projeto;

use projeto;

 create table contatos (
    id int auto_increment primary key,
    nome varchar (30) not null,
    sobrenome varchar(30) not null,
    email varchar(100) not null,
    telefone varchar(8) not null,
    observacao text
 );

/* Caso náo queira inserir os dados, o sistema irá orientar a você criar o contato do zero para armazenar no banco*/
insert into contatos(nome,sobrenome,email,telefone,observacao)
values ("Matheus", "Luiz", "91736689","matheus.felicori@hotmail.com", "Contato do matheus que está apreendendo PHP");

insert into contatos(nome,sobrenome,email,telefone,observacao)
values ("Junio", "Cesar", "98005278","juniojunio195@gmail.com" "Contato do junio que trabalha comigo");