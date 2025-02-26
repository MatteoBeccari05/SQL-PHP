<?php
if(isset($_POST['colore'])){
    $colore = $_POST['colore'];
    setcookie('colore', $colore);
}

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
<?php echo "<style> body{background-color: $colore}" ?>
<p>Ciao</p>
</body>
</html>
