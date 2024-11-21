/* le funzioni di aggregazione */

select count(*)
sum(datediff(now(), t.data_assunzione)) as giorni,
min(p.nome),
min(p.data_assunzione)
from amministrazione.personale p 
where p.nome like "a%";

select distinct  min(datediff(now(), t.data_assunzione)) as giorni
from amministrazione.personale t; 

-- quante timbrature fa una persona
select count(*) 
from amministrazione.test t 
where t.codice_fiscale  = "00010"; 


/* raggruppo le timbrature per codice fiscale */
select t.codice_fiscale, count(*) 
from amministrazione.test t 
group by t.codice_fiscale ; 


-- stampa anche i secondi 
select distinct  t.codice_fiscale, t.cognome, t.nome,
datediff(now(), t.data_assunzione) as giorni,
datediff(now(), t.data_assunzione) div 365 as anni,
datediff(now(), t.data_assunzione) mod 365 div 30 as mesi,
datediff(now(), t.data_assunzione) mod 365 mod 30 as giorni_rimanenti,
TIMESTAMPDIFF(SECOND, t.data_assunzione, now()) as secondi,
date_format(data_assunzione, "%d %M %Y") as data_assunzione 
from amministrazione.test t;


