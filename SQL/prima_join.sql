create database libreria;

create table libreria.libri(
titolo varchar(50) primary key,
argomento varchar(50),
pagine int,
cognome_autore varchar(50)
);


create table libreria.autori(
cognome varchar(50) primary key,
nome varchar(50),
data_nascita datetime,
nazionalita varchar(50)
);


INSERT INTO libreria.libri (titolo, argomento, pagine, cognome_autore)
VALUES
('Orgoglio e pregiudizio', 'Romantico', 450, 'Austen'),
('Frankenstein', 'Horror', 280, 'Shelley'),
('Il grande Gatsby', 'Romanzo', 180, 'Fitzgerald'),
('La metamorfosi', 'Fantastico', 150, 'Kafka'),
('Don Chisciotte', 'Avventura', 1000, 'Cervantes'),
('Il maestro e Margherita', 'Fantastico', 450, 'Bulgakov'),
('La casa degli spiriti', 'Famiglia', 500, 'Allende'),
('Centanni di solitudine', 'Famiglia', 400, 'García Márquez'),
('Anna Karenina', 'Dramma', 800, 'Tolstoj'),
('Le affinità elettive', 'Romantico', 250, 'Goethe');

select * from libreria.libri l ;



INSERT INTO libreria.autori (cognome, nome, data_nascita, nazionalita) VALUES
('Austen', 'Jane', '1775-12-16', 'Inglese'),
('Shelley', 'Mary', '1797-08-30', 'Inglese'),
('Fitzgerald', 'F. Scott', '1896-09-24', 'Americana'),
('Kafka', 'Franz', '1883-07-03', 'Ceca'),
('Cervantes', 'Miguel de', '1547-09-29', 'Spagnola'),
('Bulgakov', 'Mikhail', '1891-05-15', 'Russa'),
('Allende', 'Isabel', '1942-08-02', 'Cilena'),
('García Márquez', 'Gabriel', '1927-03-06', 'Colombiana'),
('Tolstoj', 'Lev', '1828-09-09', 'Russa'),
('Goethe', 'Johann Wolfgang von', '1749-08-28', 'Tedesca');

select * from libreria.autori a ;

-- INNER JOIN
select titolo, argomento, pagine, cognome_autore 
from libreria.libri l 
inner join libreria.autori a on a.cognome = cognome_autore



-- unisce le due tabelle (FULL JOIN)
(select *
from libreria.libri l 
left join libreria.autori a on a.cognome = cognome_autore)
union all 
(select *
from libreria.libri l 
right join libreria.autori a on a.cognome = cognome_autore)









