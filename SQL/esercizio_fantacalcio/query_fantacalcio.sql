select *
from fantacalcio.listone l ;


-- aumentare la quotazione del 25% all'intero successivo
update fantacalcio.listone 
set quotazione = quotazione * 1.25;

update fantacalcio.listone
set quotazione = round(quotazione + ((quotazione/100)*25)); -- round arrotonda al primo intero


-- aggiorna tutti i valori con quotazione 1 a valore null
update fantacalcio.listone 
set quotazione = null 
where quotazione = 1;


-- eliminare tutte le tuple che hanno quotazione null
delete from fantacalcio.listone 
where quotazione is null;   -- usiamo is



-- tutti i calciatori che hanno una quotazione compresa tra 11 e 15
select * from fantacalcio.listone l where quotazione between 11 and 15;



-- quali sono le squadre senza ripetizioni 
select distinct squadra from fantacalcio.listone l ;ù



-- creare una tabella con due campi: id int primary key autoincrement - squadra varchar(40) not null

create table fantacalcio.squadre(
id int primary key AUTO_INCREMENT,
descrizione varchar(40) not null
);

select * from fantacalcio.squadre s ;


-- importare dalla tabella listone le squadre 
insert into fantacalcio.squadre (descrizione)
select distinct squadra 
from fantacalcio.listone ;


-- modificare la struttura della tabella listone inserendo un attributo di nome id_squadra di tipo not null
alter table fantacalcio.listone 
add column id_squadra int not null;

-- elimina la colonna id_squadra
alter table fantacalcio.listone 
drop column id_squadra;




-- creare una tabella con i seguenti attributi 
-- id int primary key AUTO_INCREMENT
-- ruolo char(1)
-- nome varchar(40)
-- id_squadra int foreign key references squadre(id)
-- quotazione int


create table fantacalcio.calciatori(
id int primary key auto_increment,
ruolo char(1), 
nome varchar(40),
quotazione int,
id_squadra int,
foreign key (id_squadra) references squadre(id)
);

select * from fantacalcio.calciatori c 



-- visualizzare la media della quotazione per ruolo dei calciatori
select ruolo, avg(quotazione) as Media from fantacalcio.listone l group by ruolo;


-- visualizzare solo le quotazioni medie inferiori a 10
select ruolo, avg(quotazione) as Media from fantacalcio.listone l group by ruolo having avg(quotazione) < 10;





