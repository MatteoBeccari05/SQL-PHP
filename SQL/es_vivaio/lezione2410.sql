-- 1
select distinct nome_comune from vivaio.report r ;  -- visualizza la pianta senza ripetizioni

-- 2
select distinct nome, cognome from vivaio.report r ;  -- visualizza i fornitori senza ripetizioni

-- 3
select nome_comune, count(nome) as Piante 
from vivaio.report r 
group by r.nome ;

-- 4
select nome, cognome, count(nome_comune) as Piante_Fornite 
from vivaio.report r 
group by r.nome;


create table vivaio.piante(
  id int,                        -- primary key
  nome_latino varchar(100),
  nome_comune varchar(100),
  esotica boolean
);

insert into vivaio.piante(id, nome_latino, nome_comune, esotica)
select r.id, r.nome_latino, r.nome_comune, r.esotica from vivaio.report r;


create table vivaio.fornitori(
 fornitore_id int,
 partita_iva VARCHAR(11),
 codice_fiscale VARCHAR(16),
 nome VARCHAR(50),
 cognome VARCHAR(50),
 indirizzo VARCHAR(100),
 cap VARCHAR(5),
 comune VARCHAR(50),
 provincia VARCHAR(2)
);

insert into vivaio.fornitori(fornitore_id, partita_iva, codice_fiscale, nome, cognome, indirizzo, cap, comune, provincia)
select r.fornitore_id, r.partita_iva, r.codice_fiscale, r.nome, r.cognome, r.indirizzo, r.cap, r.comune, r.provincia 
from vivaio.report r ;
