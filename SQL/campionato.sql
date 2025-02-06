create database campionato;

create table campionato.casa_automobilistica(
nome varchar(30) primary key,
colore_livrea varchar(30) not null
);


create table campionato.piloti(
id int  primary key auto_increment,
nome varchar(30) not null,
cognome varchar(30) not null,
nazionalità varchar(30) not null,
numero int not null,
nome_auto varchar(30) not null,
foreign key (nome_auto) references casa_automobilistica(nome) 
);

