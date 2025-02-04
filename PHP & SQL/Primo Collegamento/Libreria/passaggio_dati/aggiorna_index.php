<?php

require_once "../connessione_db/operazioni.php";
// recupero dei dati dal form
$titolo = $_POST['name'];
$autore = $_POST['autore'];
$prezzo = $_POST['prezzo'];

aggiorna($titolo, $autore, $prezzo);   //richiamo la funzione creata nel file operazioni
?>




