<?php
require_once 'Person.php';   //per far vedere la classe a questo file 

$p1 = new Person('Matteo', 12, 'matteo@mail.it');
echo $p1->getName();
