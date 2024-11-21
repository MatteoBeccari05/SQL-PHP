/*
Date tre tabelle - CLIENTI,RAPPRESENTANTI,FATTURE - eseguire la seguente interrogazione (unica query!) ipotizzanto gli schemi comprensivi di PK e FK.
- Congiunzione di Rappresentanti e Clienti su CodiceRap
- Congiunzione della precedente  (punto1) con FATTURE  su CodiceCli
- Raggruppamento della precedente (punto2) per rappresentante e conteggio(*)
- Selezione dalla precedente (punto3) per conteggio > 2
- proiezione della precedente( punto 4) su CodiceRap, CognomeRap, Nome Rap.
(*)numero di fatture
Suggerimento: due delle tre tabelle hanno FK
*/


create database db_azienda;


CREATE TABLE db_azienda.rappresentanti (

    CodiceRap INT PRIMARY KEY,          
    NomeRap VARCHAR(100),               
    CognomeRap VARCHAR(100)             
);


CREATE TABLE db_azienda.clienti (
    CodiceCli INT PRIMARY KEY,         
    NomeCli VARCHAR(100),               
    CognomeCli VARCHAR(100),            
    CodiceRap INT,                      
    FOREIGN KEY (CodiceRap) REFERENCES db_azienda.rappresentanti(CodiceRap) 
);


CREATE TABLE db_azienda.fatture (

    CodiceFat INT PRIMARY KEY,          
    CodiceCli INT,                      
    DataFat DATE,                       
    Importo DECIMAL(10, 2),             
    FOREIGN KEY (CodiceCli) REFERENCES db_azienda.clienti(CodiceCli) 
);



INSERT INTO db_azienda.rappresentanti (CodiceRap, NomeRap, CognomeRap) VALUES
(1, 'Giovanni', 'Bianchi'),
(2, 'Maria', 'Verdi'),
(3, 'Luca', 'Rossi'),
(4, 'Anna', 'Neri');


INSERT INTO db_azienda.clienti (CodiceCli, NomeCli, CognomeCli, CodiceRap) VALUES
(101, 'Marco', 'Rinaldi', 1),
(102, 'Laura', 'Ferrari', 1),
(103, 'Giuseppe', 'Mancini', 2),
(104, 'Alessandra', 'Moretti', 2),
(105, 'Francesca', 'Gallo', 3),
(106, 'Matteo', 'Pietro', 3),
(107, 'Elena', 'Santoro', 4);


INSERT INTO db_azienda.fatture (CodiceFat, CodiceCli, DataFat, Importo) VALUES
(1001, 101, '2024-01-10', 150.00),
(1002, 101, '2024-02-10', 200.00),
(1003, 102, '2024-03-15', 250.00),
(1004, 102, '2024-04-10', 300.00),
(1005, 103, '2024-01-12', 350.00),
(1006, 103, '2024-05-18', 400.00),
(1007, 104, '2024-02-01', 500.00),
(1008, 104, '2024-03-05', 600.00),
(1009, 105, '2024-01-22', 450.00),
(1010, 105, '2024-03-30', 550.00),
(1011, 106, '2024-02-14', 700.00),
(1012, 106, '2024-06-05', 800.00),
(1013, 107, '2024-05-12', 900.00);


select * from db_azienda.rappresentanti r ;

select * from db_azienda.clienti c ;

select * from db_azienda.fatture f ;


-- query bella
select r.CodiceRap , r.NomeRap, r.CognomeRap , count(*) as Numero_Fatture
from db_azienda.rappresentanti r 
join db_azienda.clienti c on r.CodiceRap = c.CodiceRap 
join db_azienda.fatture f on c.CodiceCli = f.CodiceCli
group by r.CodiceRap , r.NomeRap, r.CognomeRap;
having count(*) > 2;
