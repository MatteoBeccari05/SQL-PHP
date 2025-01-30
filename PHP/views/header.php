<?php
require_once 'functions.php'
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav">
    <a href="home.php" class=<?=isActive('/uda_5f/views/home.php')?>>Home</a>
    <a href="contact.php" class=<?=isActive('/uda_5f/views/contact.php')?>> Contact</a>
    <a href="info.php" class=<?=isActive('/uda_5f/views/info.php')?>> Info</a>
    <a href="about.php" class=<?=isActive('/uda_5f/views/about.php')?>> About</a>
</div>
