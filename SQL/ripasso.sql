-- create database ripasso;

create table ripasso.studenti(
matricola int primary key auto_increment,
nome varchar(30) not null,
cognome varchar(30) not null,
compleanno date check(compleanno > "2007/01/01"),
maschio boolean default true
);

insert into ripasso.studenti (nome,cognome,compleanno) values ("aleandro","maradona","2008/01/01");


INSERT INTO ripasso.studenti (nome, cognome, compleanno, maschio) VALUES
('Alessandro', 'Rossi', '2008-03-15', true),
('Martina', 'Bianchi', '2007-05-20', false),
('Luca', 'Ferrari', '2009-10-02', true),
('Giulia', 'Ricci', '2008-08-30', false),
('Marco', 'Romano', '2008-01-10', true),
('Elena', 'Moretti', '2007-11-22', false),
('Davide', 'Conti', '2009-07-07', true),
('Francesca', 'Gallo', '2007-12-14', false),
('Matteo', 'Costa', '2008-09-18', true),
('Sara', 'Lombardi', '2009-02-25', false),
('Simone', 'Greco', '2008-05-01', true),
('Alice', 'Bruno', '2008-04-10', false),
('Andrea', 'Caruso', '2009-11-11', true),
('Laura', 'Fabbri', '2008-06-30', false),
('Giorgio', 'Giordano', '2007-10-17', true),
('Beatrice', 'De Luca', '2009-01-27', false),
('Nicola', 'Ferraro', '2008-07-25', true),
('Valentina', 'Rizzo', '2009-03-12', false),
('Angelo', 'Marini', '2008-11-08', true),
('Camilla', 'Sorrentino', '2007-08-21', false),
('Federico', 'Bianco', '2009-05-16', true),
('Elisa', 'Fontana', '2007-04-04', false),
('Giovanni', 'Longo', '2008-02-28', true),
('Chiara', 'Sartori', '2009-12-12', false),
('Antonio', 'Barbieri', '2008-10-03', true),
('Marta', 'Palumbo', '2007-06-15', false);
INSERT INTO ripasso.studenti (nome, cognome, compleanno, maschio) VALUES
('Leonardo', 'Vitale', '2009-07-13', true),
('Sofia', 'Neri', '2008-11-18', false),
('Tommaso', 'Galli', '2007-09-14', true),
('Chiara', 'Martini', '2009-01-09', false),
('Edoardo', 'Mazza', '2008-02-15', true),
('Emma', 'Ruggeri', '2009-06-03', false),
('Pietro', 'Rinaldi', '2007-07-25', true),
('Giorgia', 'Testa', '2008-08-08', false),
('Filippo', 'Bellini', '2009-04-01', true),
('Miriam', 'Donati', '2008-05-20', false),
('Samuel', 'Orlando', '2009-12-29', true),
('Rebecca', 'Barone', '2007-10-10', false),
('Christian', 'Leone', '2009-08-24', true),
('Linda', 'Ferrante', '2008-03-15', false),
('Matilde', 'Palmieri', '2009-05-05', false),
('Gabriele', 'Vitali', '2007-02-17', true),
('Aurora', 'Monti', '2008-07-09', false),
('Lorenzo', 'Sanna', '2009-10-30', true),
('Alice', 'D’Angelo', '2008-12-19', false),
('Matteo', 'Fiore', '2007-09-22', true),
('Elisabetta', 'Parisi', '2009-11-17', false),
('Francesco', 'Rizzi', '2008-06-11', true),
('Ginevra', 'Grassi', '2009-03-25', false),
('Alessia', 'Martelli', '2008-04-22', false),
('Davide', 'Morelli', '2007-08-03', true),
('Alberto', 'Serra', '2009-02-14', true),
('Anita', 'Pellegrini', '2008-07-01', false),
('Samuel', 'Montanari', '2007-05-09', true),
('Gloria', 'De Rosa', '2009-06-10', false),
('Roberto', 'Esposito', '2008-01-21', true),
('Isabella', 'Cattaneo', '2009-10-19', false),
('Giuseppe', 'Mazzini', '2008-11-30', true),
('Anna', 'Sangalli', '2007-12-06', false),
('Raffaele', 'Battaglia', '2009-03-02', true),
('Claudia', 'Moretti', '2008-09-15', false),
('Carlo', 'Ruggiero', '2007-06-20', true),
('Vittoria', 'Negri', '2009-08-07', false),
('Alessandro', 'Sorrentino', '2008-03-30', true),
('Paola', 'Vitali', '2007-04-15', false),
('Marco', 'Guerra', '2009-01-26', true),
('Elettra', 'Caputo', '2008-07-17', false),
('Ruggero', 'Santoro', '2009-09-27', true),
('Sabrina', 'Russo', '2008-10-15', false),
('Stefano', 'Ferrara', '2009-11-22', true),
('Valeria', 'De Angelis', '2007-12-03', false);


select * from ripasso.studenti s ;
-- cancello tutti quelli che cominciano per A
delete from ripasso.studenti where nome like "A%"; 

-- cancella tutte le tuple
truncate table ripasso.studenti;
 -- elima tabella
drop table ripasso.studenti ; 

-- ordinare in modo ascendente (piccolo --> grande)

select * from ripasso.studenti s order by nome asc;

-- calcola anni alunni
select s.nome, datediff(now(), compleanno) div 365 as anni from ripasso.studenti s ;

select s.nome, timestampdiff(year,compleanno,now()) as anni from ripasso.studenti s ;

-- calcola età media 
select avg(timestampdiff(year,compleanno,now())) as media from ripasso.studenti s ;

-- visualizzare quanti maschi e femmine

select s.maschio, count(*) from ripasso.studenti s group by maschio ;

-- visualizzare quanti maschi e femmine con condizione

select s.maschio, count(*) from ripasso.studenti s where compleanno < "2008/01/01" group by maschio;

-- visualizzo solo maschi

select s.maschio, count(*) from ripasso.studenti s group by maschio having maschio = 1;

-- modifica con tutti i maschi diventano femmine
update ripasso.studenti s set maschio = 0 where maschio = 1;
select * from ripasso.studenti s ;

-- modifica tutti quelli con nome che finisce con "o" o "e" diventano maschi
update ripasso.studenti s set maschio = 1 where nome like "%o" or nome like "%e";
select * from ripasso.studenti s ;

-- visualizza tutti quelli nati tra il 2008 ed il 2009
select * from ripasso.studenti s where compleanno between "2008/01/01" and "2009/01/01";

-- visualizza tutti quelli con matricola 21 o 30
select * from ripasso.studenti s where matricola in(21,30);

-- modifichiamo la tabella aggiungendo la colonna altezza float
alter table ripasso.studenti add column altezza float;
select * from ripasso.studenti s ;

-- aggiungi valori alla colonna aggiunta
update ripasso.studenti s set altezza = 205.7 where s.nome like "v%";
select * from ripasso.studenti s ;

update ripasso.studenti s set altezza = 170.7 where isnull(altezza);
select * from ripasso.studenti s ;

-- cancello colanna altezza
alter table ripasso.studenti drop column altezza;
select * from ripasso.studenti s ;

-- aggiungo vincolo a colonna comlpleanno
alter table ripasso.studenti modify compleanno date not null;











