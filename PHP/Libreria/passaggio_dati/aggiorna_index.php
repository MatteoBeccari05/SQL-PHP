<?php

require_once "../connessione_db/operazioni.php";
// recupero dei dati dal form
$titolo = $_POST['name'];
$autore = $_POST['autore'];
$prezzo = $_POST['prezzo'];


?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aggiornamento del prezzo di un libro</title>
    <link rel="stylesheet" href="../style/index.css">
</head>
<body>

<?php
if(!verificaConnessione())
{
    echo "<h1>Errore nella connessione al database.</h1>";
    echo '<a href="../form/home.php"><button>Torna alla Home</button></a>';
    return;  // Esci dalla funzione
}
else
{
    aggiorna($titolo, $autore, $prezzo);   //richiamo la funzione creata nel file operazioni

}
?>

</body>
</html>
