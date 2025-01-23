CREATE DATABASE dbitis;

CREATE TABLE dbitis.studenti (
  matricola_studente VARCHAR(5) primary key,
  nome VARCHAR(50) not null,
  cognome VARCHAR(50) not null,
  data_iscrizione date not null,  
  media decimal(3,1) check(media>=1 and media<=10)
);

INSERT INTO dbitis.studenti (matricola_studente,nome,cognome,data_iscrizione,media) VALUES
	 ('00006','Armanda','Ardesia','2018-03-25',6.5),
	 ('00013','Azzurra','Biscotto','2019-07-30',7.5),
	 ('00001','Antonella','Acquamarina','2001-10-08',9.5),
	 ('00002','Antonia','Amaranto','2018-10-22',4),
	 ('00003','Antonietta','Ambra','2017-11-23',8),
	 ('00004','Arianna','Ametista','2016-11-11',8),
	 ('00005','Arisa','Arancione','2018-02-01',7),
	 ('00009','Armanda','Ardesia','2019-03-25',6),
	 ('00007','Asia','Argento','2020-05-07',5),
	 ('00008','Augusta','Asparago','2019-02-21',6.5);
	 
	
	select * from dbitis.studenti s;
	
	
	