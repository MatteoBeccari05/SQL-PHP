create table amministrazione.indirizzi(
id int,
nome varchar(20), 
cognome varchar(20),
email varchar(50), 
ipaddress varchar(30)
);

-- mostro solo le persone con /24 e /20
select distinct i.nome, i.cognome, i.ipaddress 
from amministrazione.indirizzi i 
where i.ipaddress like "%/24" or i.ipaddress like "%/20";

select count(*) from amministrazione.indirizzi i ;

-- conta gli ip /24
select count(*) from amministrazione.indirizzi i where i.ipaddress like "%/24";

