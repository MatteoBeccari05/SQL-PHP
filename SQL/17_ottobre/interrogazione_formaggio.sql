create table amministrazione.parallelepipedi(
colore varchar(30),
altezza int, 
larghezza int,
profondita int, 
data_creazione datetime
);

insert into amministrazione.parallelepipedi
(altezza, larghezza, profondita, colore, data_creazione)
values (10, 5, 5, "Rosso", now()), (15, 7, 9, "Blu", "2034-12-1"), (185, 78, 95, "Giallo", "2024-12-7 16:44:06");


select count(*) from amministrazione.parallelepipedi p ;

-- vedo le righe di colori 
select count(p.colore) as coloripresenti from amministrazione.parallelepipedi p ;

-- vedo quanti colori diversi ci sono 
select count(distinct  p.colore) as coloripresenti from amministrazione.parallelepipedi p ;

-- media altezza tra i colori giallo e rosso
select avg(p.altezza) from amministrazione.parallelepipedi p where p.colore = "Giallo" or p.colore = "Rosso"; 

-- profondità minima e larghezza massima
select max(p.larghezza) as LarghezzaMax, min(p.profondita) as ProfontitaMin from amministrazione.parallelepipedi p ;

select max(p.larghezza) as LarghezzaMax, min(p.larghezza) as LarghezzaMin ,min(p.profondita), max(p.profondita) as ProfonditàMax from amministrazione.parallelepipedi p ;




