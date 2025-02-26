<?php
$array = [

    "Fiat" => ["Panda", "Punto", "Bravo"],
    "Audi" => ["A1", "A3", "A6"]

];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
foreach($array as $marca => $auto)
{?>
    <p> <?php echo $marca ?> </p>
    <br>

    <?php foreach($auto as $macchine)
    {?>
        <p><?php echo $macchine." " ?></p>
    <?php } ?>
    <br>
<?php } ?>

</body>
</html>

