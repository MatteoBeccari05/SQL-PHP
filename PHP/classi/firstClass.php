<?php
require_once 'Person.php';   //per far vedere la classe a questo file
require_once 'Student.php';
require_once 'Volunteer.php';
require_once 'Teacher.php';

$p1 = new Person('Matteo', 19, 'matteo.beccari@mail.it');
echo $p1->getName();
echo "<br>";
echo $p1->getAge();
echo "<br>";
echo $p1->getEmail();
echo "<br>";
echo $p1->introduce();

echo "<br>";
$s1 = new Student("David", 19, "david@gmail.com", "ITIS");
echo $s1->student_presentation();

echo "<br>";
echo $s1->toDO();

echo "<br>";
$t1 = new Teacher("Nome1", "Cognome1");
$t2 = new Teacher("Nome2", "Cognome2");
$t3 = new Teacher("Nome3", "Cognome3");
echo Teacher::getRegister();
