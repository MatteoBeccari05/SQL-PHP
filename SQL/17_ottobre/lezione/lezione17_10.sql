-- between

-- trovo le persone con fascia di stipendio compresa tra 2 e 4
select distinct t.nome, t.cognome, t.fascia_stipendio  from amministrazione.test t 
where t.fascia_stipendio between 2 and 4;

-- con nome che inizia per a e termina per a
select distinct * 
from amministrazione.personale p 
where p.nome like "a%a";

-- visualizza i nomi tra arisa ed asia
select distinct *
from amministrazione.personale p 
where p.nome between "arisa" and "asia";

-- scrive le persone assunte tra il 1990 e il 1993
select distinct *
from amministrazione.personale p 
where p.data_assunzione  between "1990-03-03" and "1993-04-26";

-- quando si usa la group by non posso usare la clausola where dopo la group by
select p.fascia_stipendio, count(*)
from amministrazione.personale p 
where p.nome like "a%"
group by p.fascia_stipendio
having  p.fascia_stipendio in (1,3,5);



-- SUM
-- quante timbrature fa ogni persona 
select t.codice_fiscale, count(*)
from amministrazione.test t
group by t.codice_fiscale ;


select t.codice_fiscale, t.ingresso , t.uscita , sum(hour(timediff(t.uscita, t.ingresso)) * 60  + minute (timediff(t.uscita, t.ingresso))) as minuti_lavorati
from amministrazione.test t
group by t.codice_fiscale ;


