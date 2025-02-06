<?php

spl_autoload_register(function ($class){ //trova tutte le classi del progetto
    require $class.'.php';
});



use \firstDir\ClasseUno;
use \secondDir\ClasseDue;
use \firstDir\firstFirstDir\ClasseUnoUno;

$c1 = new ClasseUno();
$c2 = new ClasseDue();
$c11 = new ClasseUnoUno();

$c1 -> saluta();
echo "<br>";
$c2 -> saluta();
echo "<br>";
$c11 -> saluta();