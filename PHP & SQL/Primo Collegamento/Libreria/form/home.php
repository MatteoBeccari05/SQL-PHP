<?php
$content = 'Gestione della libreria';
require_once '../struttura_pagina/functions_active_navbar.php';
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
    <title>Libreria</title>
</head>
<body>
<h2 class="titolo"><?=$content?></h2>
<br>
<div class="cards-container">
    <div class="card">
        <a href="form_inserimento.php">
            <img src="../image/aggiungi2.jpeg" alt="Immagine 1">
        </a>
    </div>

    <div class="card">
        <a href="form_elimina.php">
            <img src="../image/rimuovi.jpeg" alt="Immagine 2">
        </a>
    </div>

    <div class="card">
        <a href="form_aggiorna.php">
            <img src="../image/aggiorna.jpeg" alt="Immagine 3">
        </a>
    </div>

    <div class="card">
        <a href="visualizza.php">
            <img src="../image/visualizza.jpeg" alt="Immagine 4">
        </a>
    </div>
</div>

<?php
require '../struttura_pagina/footer.php';
?>

