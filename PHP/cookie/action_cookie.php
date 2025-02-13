<?php


if(isset($_POST['name']) && isset($_POST['color']))
{
    $user = $_POST['name'];
    $color = $_POST['color'];
    setcookie('user', $user);
    setcookie('color', $color);
}
else
{
    $user = $_COOKIE['user'] ?? '';
    $color = $_COOKIE['color'] ?? '';
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
    <p> Grazie <?=$user?> per esserti registrato, il tuo colore è <?=$color?> </p>
</body>
</html>
