create database wifi;


CREATE TABLE wifi.produttori (
    id_produttore INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sede VARCHAR(100),
    anno_fondazione INT
);



CREATE TABLE wifi.modelli_access_point (
    id_modello INT AUTO_INCREMENT PRIMARY KEY,
    nome_modello VARCHAR(100) NOT NULL,
    tipo VARCHAR(50),
    anno_uscita INT,
    id_produttore INT,
    FOREIGN KEY (id_produttore) REFERENCES produttori(id_produttore)
);


INSERT INTO wifi.produttori (nome, sede, anno_fondazione)
VALUES 
    ('TP-Link', 'Shenzhen, Cina', 1996),
    ('Cisco', 'San Jose, USA', 1984),
    ('Netgear', 'San Jose, USA', 1996),
    ('Ubiquiti Networks', 'New York, USA', 2005),
    ('D-Link', 'Taipei, Taiwan', 1986),
    ('Linksys', 'San Jose, USA', 1988);


INSERT INTO wifi.modelli_access_point (nome_modello, tipo, anno_uscita, id_produttore)
VALUES 
    ('Archer C7', 'Wi-Fi 5, Dual-band', 2015, 1),
    ('Archer AX6000', 'Wi-Fi 6, Dual-band', 2019, 1),
    ('WRT3200ACM', 'Wi-Fi 5, Tri-band', 2017, 2),
    ('Nighthawk R7000', 'Wi-Fi 5, Dual-band', 2014, 3),
    ('Orbi RBK50', 'Wi-Fi 5, Tri-band', 2016, 3),
    ('UniFi AP AC Pro', 'Wi-Fi 5, Dual-band', 2015, 4),
    ('UniFi AP AC LR', 'Wi-Fi 5, Dual-band', 2017, 4),
    ('DIR-880L', 'Wi-Fi 5, Dual-band', 2014, 5),
    ('Linksys EA7500', 'Wi-Fi 5, Dual-band', 2016, 6),
    ('Linksys Velop', 'Wi-Fi 5, Tri-band', 2017, 6);
