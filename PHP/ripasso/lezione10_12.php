<?php

//================FILES================
echo '=============='.'<br>';
//per trovare il percorso del file
echo getcwd();
echo '<hr>';
echo DIRECTORY_SEPARATOR;
echo '<hr>';

//utilizzo per trovare il percoso del file
$path=getcwd();
echo is_file($path.DIRECTORY_SEPARATOR.'prova.txt')?'file esistente' : 'file bifolco';
echo '<br>';
echo is_file($path.DIRECTORY_SEPARATOR.'prova.txt')?'file esistente' : 'file bifolco';
echo '<hr>';


$text = file_get_contents($path.DIRECTORY_SEPARATOR.'prova.txt');
echo '<div>'. $text. '<div>';

$rows = file($path.DIRECTORY_SEPARATOR.'prova.txt');

foreach ($rows as $row)
    echo '<div>'.$row.'<div>';

$message = "CIAO QUESTO è UN NUOVO MESSAGGIO BELLO";
file_put_contents($path.DIRECTORY_SEPARATOR.'prova.txt', $message, FILE_APPEND);


$subjects = ['informatica', 'sistemi', 'tpsi'];
$names = implode("\n", $subjects);
file_put_contents($path.DIRECTORY_SEPARATOR.'subjects.txt', $names);
