<?php
require_once 'functions_active_navbar.php'
?>


<div class="navbar">
    <a href="home.php" class="<?= isActive('home.php') ?>"> Home</a>
    <a href="form_inserimento.php" class="<?= isActive('form_inserimento.php') ?>"> Inserimento Libro</a>
    <a href="form_aggiorna.php" class="<?= isActive('form_aggiorna.php') ?>"> Aggiorna Libro</a>
    <a href="form_elimina.php" class="<?= isActive('form_elimina.php') ?>"> Elimina Libro</a>
    <a href="visualizza.php" class="<?= isActive('visualizza.php') ?>"> Visualizza</a>
</div>



