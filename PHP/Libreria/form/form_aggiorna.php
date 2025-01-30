<?php
$content = 'Aggiornamento del prezzo di un libro';
require '../struttura_pagina/navbar.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <title>Aggiorna</title>
</head>
<body>
<h2><?=$content?></h2>

<form method="post" action="../passaggio_dati/aggiorna_index.php">
    <label for="name">Inserisci il titolo del libro da aggiornare:</label>
    <input type="text" id="name" name="name" required>

    <label for="autore">Inserisci l'autore del libro da aggiornare:</label>
    <input type="text" id="autore" name="autore" required>

    <label for="prezzo">Inserisci il nuovo prezzo del libro:</label>
    <input type="text" id="prezzo" name="prezzo" required>

    <input type="submit" value="Aggiorna">
</form>

<?php
require '../struttura_pagina/footer.php';
?>

