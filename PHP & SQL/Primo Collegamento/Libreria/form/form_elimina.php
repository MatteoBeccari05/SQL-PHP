<?php
$content = 'Eliminazione di un libro';
require '../struttura_pagina/navbar.php';
require_once '../struttura_pagina/functions_active_navbar.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <title>Elimina libro</title>
</head>
<body>

<h2><?=$content?></h2>

<form method="post" action="../passaggio_dati/elimina_index.php">
    <label for="name">Inserisci il titolo del libro da eliminare:</label>
    <input type="text" id="name" name="name" required>

    <label for="autore">Inserisci l'autore del libro da eliminare:</label>
    <input type="text" id="autore" name="autore" required>

    <input type="submit" value="Elimina">

</form>

<?php
require '../struttura_pagina/footer.php';
?>

