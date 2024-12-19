<?php

var_dump($_POST);   //array di sistema che contiene i dati che inseriamo nel form
            //associative array -> copia key (name) value(valore)
$name = $_POST['name'];
$password = $_POST['password'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];
$toppings = $_POST['top'];
$car= $_POST['car'];
$carlistmultiple= $_POST['carlistmultiple'];
$carlist= $_POST['carlist'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Your Data</h1>
    <p> Name: <?php echo $name ?></p>
    <p> Password: <?php echo $password ?></p>
    <p> Comment: <?php echo $comment ?></p>
    <p> Gender: <?php echo $gender ?></p>
    <?php
        foreach ($toppings as $top)
            echo "<p> Toppings: ".$top."</p>"
    ?>

    <p> Car: <?php echo $car ?></p>
    <p> CarList: <?php echo $carlist ?></p>
    <?php
    foreach ($carlistmultiple as $carm)
        echo "<p> Car List Multiple: ".$carm."</p>"
    ?>

    <h2 id="demo"> </h2>

    <script src="myScript.js"></script>
</body>
</html>
