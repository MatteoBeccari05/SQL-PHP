-- proiezione dell'intera tabella
select * from amministrazione.test t ;

-- proiezione degli attributi elencati dell'intera tabella senza ripetizione delle tuple uguali (unique)
select distinct t.codice_fiscale, t.cognome, t.nome from amministrazione.test t  ;		/*con il distinct mostro solo le singole persone */

-- conta le righe della tabella
select count(*) from amministrazione.test t ;  /* conta le righe */

-- proiezione con selezione
select distinct t.codice_fiscale, t.cognome, t.nome from amministrazione.test t  where t.nome = "aurelia" ;

select distinct t.codice_fiscale, t.cognome, t.nome from amministrazione.test t  where t.nome like "%A" ;   /*cerco le persone con il nome che termina per A */

select t.codice_fiscale, t.cognome, t.nome, t.ingresso, t.uscita  from amministrazione.test t ;  /* visualizzo le timbrature di tutto il personale */   

select t.codice_fiscale, t.cognome, t.nome, t.ingresso, t.uscita  from amministrazione.test t order by t.ingresso desc ;  /* timbrature ordinate per data di ingresso dall'ultima timbratura alla prima (ordine descrescente) */

select t.codice_fiscale, t.cognome, t.nome, t.ingresso, t.uscita  from amministrazione.test t order by t.ingresso asc ;  /* timbrature ordinate per data di ingresso (ordine crescente) */

select distinct  t.codice_fiscale, t.cognome, t.nome, t.data_assunzione from amministrazione.test t;  

select distinct  t.codice_fiscale, t.cognome, t.nome, now(), t.data_assunzione from amministrazione.test t;  

select distinct  t.codice_fiscale, t.cognome, t.nome, datediff(now(), t.data_assunzione) as giorni from amministrazione.test t;  /*giorni trascorsi dall'assunzione*/

select distinct  t.codice_fiscale, t.cognome, t.nome, datediff(now(), t.data_assunzione) as giorni, datediff(now(), t.data_assunzione) / 365 as anni  from amministrazione.test t;  /* calcola gli anni da quando è stato assunto */

select distinct  t.codice_fiscale, t.cognome, t.nome, datediff(now(), t.data_assunzione) as giorni, datediff(now(), t.data_assunzione) div 365 as anni  from amministrazione.test t;  /* calcola gli anni da quando è stato assunto senza virgole*/

select distinct  t.codice_fiscale, t.cognome, t.nome, datediff(now(), t.data_assunzione) as giorni, datediff(now(), t.data_assunzione) div 365 as anni, datediff(now(), t.data_assunzione) mod 365 as x from amministrazione.test t;  /* giorni che rimangono */

select distinct  t.codice_fiscale, t.cognome, t.nome, 
datediff(now(), t.data_assunzione) as giorni, 
datediff(now(), t.data_assunzione) div 365 as anni, 
datediff(now(), t.data_assunzione) mod 365 div 30 as mesi, 
datediff(now(), t.data_assunzione) mod 365 mod 30 as giorni_rimanenti 
from amministrazione.test t; 


select distinct  t.codice_fiscale, t.cognome, t.nome, 
datediff(now(), t.data_assunzione) as giorni, 
datediff(now(), t.data_assunzione) div 365 as anni, 
datediff(now(), t.data_assunzione) mod 365 div 30 as mesi, 
datediff(now(), t.data_assunzione) mod 365 mod 30 as giorni_rimanenti,
date_format(data_assunzione, "%d %M %Y") as data_assunzione  
from amministrazione.test t; 



/*inserimento multiplo di righe da una tabella ad un altra tabella*/

/*insert into tablename select*/

create table amministrazione.personale(
codice_fiscale nvarchar(16), 
nome nvarchar(50),
cognome nvarchar(50),
fascia_stipendio int,
data_assunzione datetime
);


/*importiamo il personale dalla tabella test alla tabella personale con proiezione UNIQUE*/
insert  into amministrazione.personale
select distinct t.codice_fiscale, t.nome, t.cognome, t.fascia_stipendio, t.data_assunzione
from amministrazione.test t;

-- visualizzo la tabella 
select * from amministrazione.personale; 



 



