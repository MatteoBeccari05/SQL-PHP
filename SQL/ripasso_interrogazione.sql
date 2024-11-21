/*create database vendite;

create table vendite.oggetti(
id int,
prodotto varchar(20),
categoria varchar(20), 
quantita int,
prezzo double
);

insert into vendite.oggetti (id, prodotto, categoria, quantita, prezzo)
values (1, "Prodotto 1", "Elettronica", 3, 200),
(2, "Prodotto 2", "Elettronica", 3, 150),
(3, "Prodotto 3", "Abbigliamento", 5, 100),
(4, "Prodotto 4", "Abbigliamento", 2, 300),
(5, "Prodotto 5", "Elettronica", 1, 400);*/

select * from vendite.oggetti o ;  -- mostra l'intera tabella

select categoria, sum(quantita) as quantita_totale    -- esempio di group by , mostra gli oggetti totali per categoria
from vendite.oggetti
group by categoria ;

select categoria, sum(prezzo) as prezzo_totale  -- mostra il prezzo totale per categoria
from vendite.oggetti
group by categoria ;


select prodotto, prezzo from vendite.oggetti o where o.prezzo > 200;

select prodotto, categoria, prezzo from vendite.oggetti o where o.prodotto like "%3";  -- mostra i prodotti che terminano con 3


select avg(prezzo) from vendite.oggetti o where o.prezzo > 200;    -- calcola la media del prezzo dei prodotti con prezzo superiore a 200

select avg(prezzo) from vendite.oggetti o where o.categoria = "Elettronica";   -- calcola la media del prezzo della categoria elettronica


select count(*) from vendite.oggetti o ; -- mostra la quantità di tuple


select min(prezzo) as prezzominimo, max(prezzo) as prezzomassimo from vendite.oggetti o ;  -- mostra prezzo minimo e prezzo massimo 

select categoria, min(prezzo) as prezzominimo from vendite.oggetti o group by categoria;  -- mostra il prezzo minimo per ogni categoria

select max(prezzo) as prezzomassimo from vendite.oggetti o where o.prezzo between 200 and 300;  -- mostra il prezzo massimo nel range 200 300

select count(distinct categoria) as numero_categorie from vendite.oggetti o ;  -- mostra il numero di categorie presenti (2)

select categoria, sum(quantita) as Quantita from vendite.oggetti o group by categoria having sum(quantita) > 5;   -- mostrerà solo le categorie con numero di prodotti maggiore di 5


select prodotto, categoria, prezzo from vendite.oggetti o order by prezzo desc;  -- ORDINA I PRODOTTI DAL PREZZO PIU ALTO AL PIU BASSO

select prodotto, categoria, prezzo, quantita from vendite.oggetti o order by quantita desc;  -- ordina i prodotti per quantità

select categoria, sum(prezzo) as Prezzo from vendite.oggetti o group by categoria having sum(prezzo) > 500;	-- mostra solo le categorie con prezzo totale maggiore di 500

select categoria, sum(prezzo) as Prezzo from vendite.oggetti o group by categoria having prezzo = 400; -- mostra solo le categorie con prezzo totale di 400 euro

select avg(prezzo) from vendite.oggetti o where o.id between 1 and 3; 